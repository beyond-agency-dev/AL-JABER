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

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Product List</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                    <li class="breadcrumb-item active">Product List</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="card overflow-hidden">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-0">Filters</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <a href="#" class="text-decoration-underline" id="clearall">Clear All</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion accordion-flush filter-accordion">
                                <div class="card-body border-bottom">
                                    <div>
                                        <p class="text-muted text-uppercase fs-13 mb-3">Products</p>
                                        <ul class="list-unstyled mb-0 filter-list">
                                            <li>
                                                <a href="#" class="d-flex py-1 align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 listname">Grocery</h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex py-1 align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 listname">Fashion</h6>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <span class="badge bg-light text-muted">5</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex py-1 align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 listname">Watches</h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex py-1 align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 listname">Electronics</h6>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <span class="badge bg-light text-muted">5</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex py-1 align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 listname">Furniture</h6>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <span class="badge bg-light text-muted">6</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex py-1 align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 listname">Automotive Accessories</h6>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="d-flex py-1 align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 listname">Appliances</h6>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <span class="badge bg-light text-muted">7</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="d-flex py-1 align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0 listname">Kids</h6>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-body border-bottom">
                                    <p class="text-muted text-uppercase fs-13 m b-4">Price</p>

                                    <div id="product-price-range" data-slider-color="info"></div>
                                    <div class="formCost d-flex gap-2 align-items-center mt-3">
                                        <input class="form-control form-control-sm" type="text" id="minCost" value="0"> <span class="fw-semibold text-muted">to</span> <input class="form-control form-control-sm" type="text" id="maxCost" value="1000">
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingColors">
                                        <button class="accordion-button bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseColors" aria-expanded="true" aria-controls="flush-collapseColors">
                                            <span class="text-muted text-uppercase fs-13">Colors</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                        </button>
                                    </h2>

                                    <div id="flush-collapseColors" class="accordion-collapse collapse show" aria-labelledby="flush-headingColors">
                                        <div class="accordion-body text-body pt-0">
                                            <ul class="clothe-colors list-unstyled hstack gap-3 mb-0 flex-wrap" id="color-filter">
                                                <li>
                                                    <input type="radio" name="colors" value="success" id="color-1">
                                                    <label class="avatar-xs btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-1"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="colors" value="info" id="color-2">
                                                    <label class="avatar-xs btn btn-info p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-2"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="colors" value="warning" id="color-3">
                                                    <label class="avatar-xs btn btn-warning p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-3"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="colors" value="danger" id="color-4">
                                                    <label class="avatar-xs btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-4"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="colors" value="primary" id="color-5">
                                                    <label class="avatar-xs btn btn-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-5"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="colors" value="secondary" id="color-6">
                                                    <label class="avatar-xs btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-6"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="colors" value="dark" id="color-7">
                                                    <label class="avatar-xs btn btn-dark p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-7"></label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="colors" value="light" id="color-8">
                                                    <label class="avatar-xs btn btn-light p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-8"></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion-item -->

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSize">
                                        <button class="accordion-button bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSize" aria-expanded="true" aria-controls="flush-collapseSize">
                                            <span class="text-muted text-uppercase fs-13">Sizes</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                        </button>
                                    </h2>

                                    <div id="flush-collapseSize" class="accordion-collapse collapse show" aria-labelledby="flush-headingSize">
                                        <div class="accordion-body text-body pt-0">
                                            <ul class="clothe-size list-unstyled hstack gap-3 mb-0 flex-wrap" id="size-filter">
                                                <li>
                                                    <input type="radio" name="sizes" value="xs" id="sizeXs">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeXs">XS</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="sizes" value="s" id="sizeS">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeS">S</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="sizes" value="m" id="sizeM">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeM">M</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="sizes" value="l" id="sizeL">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeL">L</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="sizes" value="xl" id="sizeXl">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeXl">XL</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="sizes" value="2xl" id="size2xl">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="size2xl">2XL</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="sizes" value="3xl" id="size3xl">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="size3xl">3XL</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="sizes" value="4xl" id="size4xl">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="size4xl">4XL</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion-item -->

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingDiscount">
                                        <button class="accordion-button bg-transparent shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseDiscount" aria-expanded="true" aria-controls="flush-collapseDiscount">
                                            <span class="text-muted text-uppercase fs-13">Discount</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseDiscount" class="accordion-collapse collapse" aria-labelledby="flush-headingDiscount">
                                        <div class="accordion-body text-body pt-1">
                                            <div class="d-flex flex-column gap-2 filter-check" id="discount-filter">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="50" id="productdiscountRadio6">
                                                    <label class="form-check-label" for="productdiscountRadio6">50% or more</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="40" id="productdiscountRadio5">
                                                    <label class="form-check-label" for="productdiscountRadio5">40% or more</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="30" id="productdiscountRadio4">
                                                    <label class="form-check-label" for="productdiscountRadio4">
                                                        30% or more
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="20" id="productdiscountRadio3">
                                                    <label class="form-check-label" for="productdiscountRadio3">
                                                        20% or more
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="10" id="productdiscountRadio2">
                                                    <label class="form-check-label" for="productdiscountRadio2">
                                                        10% or more
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="0" id="productdiscountRadio1">
                                                    <label class="form-check-label" for="productdiscountRadio1">
                                                        Less than 10%
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion-item -->

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingRating">
                                        <button class="accordion-button bg-transparent shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseRating" aria-expanded="false" aria-controls="flush-collapseRating">
                                            <span class="text-muted text-uppercase fs-13">Rating</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                        </button>
                                    </h2>

                                    <div id="flush-collapseRating" class="accordion-collapse collapse" aria-labelledby="flush-headingRating">
                                        <div class="accordion-body text-body">
                                            <div class="d-flex flex-column gap-2 filter-check" id="rating-filter">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="4" id="productratingRadio4">
                                                    <label class="form-check-label" for="productratingRadio4">
                                                        <span class="text-muted">
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star"></i>
                                                        </span> 4 & Above
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="3" id="productratingRadio3">
                                                    <label class="form-check-label" for="productratingRadio3">
                                                        <span class="text-muted">
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                        </span> 3 & Above
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="2" id="productratingRadio2">
                                                    <label class="form-check-label" for="productratingRadio2">
                                                        <span class="text-muted">
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                        </span> 2 & Above
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1" id="productratingRadio1">
                                                    <label class="form-check-label" for="productratingRadio1">
                                                        <span class="text-muted">
                                                            <i class="mdi mdi-star text-warning"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                        </span> 1
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion-item -->
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-9 col-lg-8">
                        <div class="row g-4 mb-4">
                            <div class="col-sm-auto">
                                <div>
                                    <a href="product-create.html" class="btn btn-success" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add Product</a>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                    <div class="search-box ms-2">
                                        <input type="text" class="form-control" autocomplete="off" id="searchProductList" placeholder="Search Products...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="product-list" class="gridjs-border-none mb-4"></div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Toner.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection

@section('footerjs')
<!-- <script src="{{asset('assets/js/backend/product-list.init.js')}}"></script>  -->
<script>
$(document).ready(function() {
    // $('#product-list').dataTable();

    console.log('here in the product index')

});
</script>
@endsection