@extends('layouts.admin_layout')
@section('title', 'Categories')
@section('class', 'active')
@section('content')
<div>
    <x-breadcrumb title="Categories" :breadcrumbs="[
            ['name' => 'Home', 'url' => route('admin.dashboard')],
            ['name' => 'Categories', 'url' => route('categories.index')],
        ]" />

    <div class="d-flex justify-content-start mb-3">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal" id="createbtn">
            Add Categories
        </button>

    </div>

    <div class="card">
        <div class="card-body">
            <table id="categories-datatables" class="display table table-bordered dt-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl. No</th>
                        <th>Name</th>
                        <th>Parent Category</th>
                        <th>Description</th>
                        <th>Thumbnail</th>
                        <th>Status</th>
                        <th data-sort="action">Action</th>
                    </tr>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>jj</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->parent ? $category->parent->name : ''}}</td>
                        <td>{{$category->description}}</td>
                        <td>
                            @if($category->thumbnail_url)
                            <img class="rounded-circle header-profile-user" src="{{$category->thumbnail_url}}" alt="Thumbnail">
                            @else
                            N/A
                            @endif
                        </td>
                        <td>
                            <div class="form-check form-switch form-switch-success mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck3" {{$category->status ? 'checked' : ''}}>

                            </div>
                        </td>
                        <td data-sort="action">
                            <div class="hstack gap-3 fs-15">
                                <a
                                    class="link-primary editButton"
                                    data-toggle="modal"
                                    data-target="#editModal"
                                    data-id="{{ $category->id }}"
                                    data-name="{{ $category->name }}"
                                    data-parent-id="{{ $category->parent_id }}"
                                    data-description="{{ $category->description }}"
                                    data-thumbnail-url="{{ $category->thumbnail_url }}">
                                    <i class="ri-edit-line"></i>
                                </a>
                                <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>


{{-- create modal --}}
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header px-4 pt-4">
                <h5 class="modal-title" id="categoryModalLabel">Add Categories </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form id="categoryForm" class="tablelist-form" novalidate autocomplete="off" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                    <input type="hidden" id="id-field" />

                    <!-- <div class="text-center">
                        <div class="position-relative d-inline-block">
                            <div class="position-absolute  bottom-0 end-0">
                                <label for="users-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Thumbnail">
                                    <div class="avatar-xs cursor-pointer">
                                        <div class="avatar-title bg-light border rounded-circle text-muted">
                                            <i class="ri-image-fill"></i>
                                        </div>
                                    </div>
                                </label>
                                <input class="form-control d-none" value="" id="users-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                            </div>
                            <div class="avatar-lg p-1">
                                <div class="avatar-title bg-light rounded-circle">
                                    <img src="../assets/images/users/user-dummy-img.jpg" id="users-img-field" class="avatar-md rounded-circle object-cover" />
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="mb-3" id="modal-id">
                            <label for="orderId" class="form-label">User ID</label>
                            <input type="text" id="orderId" class="form-control" placeholder="ID" readonly />
                        </div> -->

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Enter Category Name" required name="name" />
                    </div>
                    <div class="mb-3">
                        <label for="date-field" class="form-label">Parent Category</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="parent_id" required>
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" id="description" class="form-control" placeholder="Enter Description" required name="description" />
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Category Thumbnail</label>
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
                        <img id="thumbnailPreview" src="#" alt="Thumbnail Preview" style="display:none; max-height: 100px; margin-top: 10px;">
                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="savebtn">Submit</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
{{--create modal end--}}

@endsection

@section('footerjs')
<script>
    $(document).ready(function() {

        //on click create btn
        $('#createBtn').on('click', function() {
            $('#categoryForm')[0].reset();
            $('#categoryModalLabel').text('Create Category');
            $('#saveBtn').text('Create');
            $('#categoryForm').attr('action', '{{ route("categories.store") }}');
            $('#methodInput').html('');
        });

        //on click edit button
        $('.editButton').on('click', function() {
            $('#createModal').modal('show')
            var id = $(this).data('id');
            var name = $(this).data('name');
            var parentId = $(this).data('parent-id');
            var description = $(this).data('description');
            var thumbnailUrl = $(this).data('thumbnail-url');

            $('#categoryModalLabel').text('Edit Category');
            $('#saveBtn').text('Update');
            $('#name').val(name);
            $('#parent_id').val(parentId);
            $('#description').val(description);

            //show thumbanil in edit modal if available
            if (thumbnailUrl) {
                $('#thumbnailPreview').attr('src', thumbnailUrl).show();
            } else {
                $('#thumbnailPreview').hide();
            }



            $('#thumbnail').val(thumbnail_url);
            $('#categoryForm').attr('action', '{{ route("categories.update", ["category" => "category"]) }}'.replace('id', id));
            $('#methodInput').html('<input type="hidden" name="_method" value="PUT">');
        });

        //on selet file
        $('#thumbnail').on('change', function(event) {
            const file = event.target.files[0];
            const preview = $('#thumbnailPreview');

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.attr('src', e.target.result);
                    preview.show();
                }

                reader.readAsDataURL(file);
            } else {
                preview.hide();
                preview.attr('src', '');
            }
        });
    });
</script>
@endsection