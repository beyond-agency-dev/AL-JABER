@extends('layouts.admin_layout')
@section('title', 'Add Product')
@section('content')
    <div>
        <x-breadcrumb title="Products" :breadcrumbs="[
            ['name' => 'Home', 'url' => route('admin.dashboard')],
            ['name' => 'Add Product', 'url' => route('products.create')],
        ]" />

        <form class="" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label">Product Name*</label>
                    <input type="text" class="form-control" name="product_name" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Product Image*</label>
                    <input type="file" class="form-control" name="product_image" required>
                </div>
            </div>
            <div class="row text-end mt-3">
                <div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
