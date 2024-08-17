@extends('layouts.admin_layout')
@section('title', 'Products')
@section('content')
    <div>
        <x-breadcrumb title="Products" :breadcrumbs="[
            ['name' => 'Home', 'url' => route('admin.dashboard')],
            ['name' => 'Products', 'url' => route('products.index')],
        ]" />

        <div class="d-flex justify-content-start mb-3">
            <a href="{{ route('products.create') }}">
                <button type="button" class="btn btn-primary">
                    Add Product
                </button>
            </a>
        </div>

        <div class="card">
            <div class="card-body">
                <table id="products-datatables" class="display table table-bordered dt-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl. No</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('footerjs')
    <script>
        console.log('test');
    </script>
@endsection
