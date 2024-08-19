@extends('layouts.admin_layout')
@section('title', 'Categories')
@section('content')
    <div>
        <x-breadcrumb title="Categories" :breadcrumbs="[
            ['name' => 'Home', 'url' => route('admin.dashboard')],
            ['name' => 'Categories', 'url' => route('categories.index')],
        ]" />

        <div class="d-flex justify-content-start mb-3">

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#showModal">
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
                            <th>Parent Id</th>
                            <th>Description</th>
                            <th>Thumbnail</th>
                            <th>Status</th>
                            <th  data-sort="action">Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>


{{-- modal --}}
    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header px-4 pt-4">
                    <h5 class="modal-title" id="exampleModalLabel">Add Categories   </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                </div>
                <form class="tablelist-form" novalidate autocomplete="off" >
                    <div class="modal-body p-4">
                        <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                        <input type="hidden" id="id-field" />

                        <div class="text-center">
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
                        </div>

                        <!-- <div class="mb-3" id="modal-id">
                            <label for="orderId" class="form-label">User ID</label>
                            <input type="text" id="orderId" class="form-control" placeholder="ID" readonly />
                        </div> -->

                        <div class="mb-3">
                            <label for="user-name" class="form-label">User Name</label>
                            <input type="text" id="user-name-field" class="form-control" placeholder="Enter Name" required />
                        </div>
                        <div class="mb-3">
                            <label for="email-field" class="form-label">User Email</label>
                            <input type="email" id="email-field" class="form-control" placeholder="Enter Email" required />
                        </div>


                        <div class="mb-3">
                            <label for="date-field" class="form-label">Date</label>
                            <input type="date" id="date-field" class="form-control" data-provider="flatpickr" required data-date-format="d M, Y" required placeholder="Select date" />
                        </div>


                        <div>
                            <label for="account-status" class="form-label">Account Status</label>
                            <select class="form-control" required id="account-status-field">
                                <option value="">Account Status</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="add-btn">Add User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footerjs')
    <script>
        console.log('test');
    </script>
@endsection
