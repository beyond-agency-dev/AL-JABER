@extends('layouts.web_layout')
@section('content')

<section class="ecommerce-about" style="background-image: url('../assets/images/profile-bg.jpg'); background-size: cover; background-position: center; padding: 20px 0;">
    <div class="bg-overlay bg-primary" style="opacity: 0.85;"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-light justify-content-center mt-1" style="padding-top: 95px; margin: 0;">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Category</li>
                        </ol>
                    </nav>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
<!--end container-->
</section>
<section>
    <div class="container">
        <br>
        <div class="row gx-0 gy-0 justify-content-center">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="text-center mb-2">
                    <img src="../assets/images/products/img-6.png" alt="" class="img-fluid rounded-circle bg-warning-subtle border border-2 border-warning border-opacity-10 p-2" style="width: 80px; height: 80px;">
                    <div class="mt-2">
                        <a href="#!">
                            <h5 class="mb-1 fs-15">Clothes</h5>
                        </a>

                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="text-center mb-2">
                    <img src="../assets/images/products/img-20.png" alt="" class="img-fluid rounded-circle bg-dark-subtle border border-2 border-dark border-opacity-10 p-2" style="width: 80px; height: 80px;">
                    <div class="mt-2">
                        <a href="#!">
                            <h5 class="mb-1 fs-15">Electronics</h5>
                        </a>

                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="text-center mb-2">
                    <img src="../assets/images/products/img-18.png" alt="" class="img-fluid rounded-circle bg-warning-subtle border border-2 border-warning border-opacity-10 p-2" style="width: 80px; height: 80px;">
                    <div class="mt-2">
                        <a href="#!">
                            <h5 class="mb-1 fs-15">Cosmetic</h5>
                        </a>

                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="text-center mb-2">
                    <img src="../assets/images/products/img-1.png" alt="" class="img-fluid rounded-circle bg-danger-subtle border border-2 border-danger border-opacity-10 p-2" style="width: 80px; height: 80px;">
                    <div class="mt-2">
                        <a href="#!">
                            <h5 class="mb-1 fs-15">Bags</h5>
                        </a>

                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="text-center mb-2">
                    <img src="../assets/images/products/img-15.png" alt="" class="img-fluid rounded-circle bg-info-subtle border border-2 border-info border-opacity-10 p-2" style="width: 80px; height: 80px;">
                    <div class="mt-2">
                        <a href="#!">
                            <h5 class="mb-1 fs-15">Handbags & Clutches</h5>
                        </a>

                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="text-center mb-2">
                    <img src="../assets/images/products/img-5.png" alt="" class="img-fluid rounded-circle bg-danger-subtle border border-2 border-danger border-opacity-10 p-2" style="width: 80px; height: 80px;">
                    <div class="mt-2">
                        <a href="#!">
                            <h5 class="mb-1 fs-15">Footwear</h5>
                        </a>
                        <
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>

<section>
    <div class="container mt-5">
        <div class="search-form" style="background-color: #e4e7ea;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <form>
                <div class="row g-3">
                    <div class="col-md-3">
                        <label for="vehicleType" class="form-label">Vehicle type</label>
                        <select class="form-select" id="vehicleType">
                            <option selected>Choose...</option>
                            <option value="1">Type 1</option>
                            <option value="2">Type 2</option>
                            <option value="3">Type 3</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="brand" class="form-label">Brand</label>
                        <select class="form-select" id="brand">
                            <option selected>All [181]</option>
                            <option value="1">Brand 1</option>
                            <option value="2">Brand 2</option>
                            <option value="3">Brand 3</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="constructionYearFrom" class="form-label">Construction year</label>
                        <div class="d-flex">
                            <select class="form-select me-2" id="constructionYearFrom">
                                <option selected>From</option>
                                <option value="1">2022</option>
                                <option value="2">2021</option>
                                <option value="3">2020</option>
                            </select>
                            <select class="form-select" id="constructionYearUntil">
                                <option selected>Until</option>
                                <option value="1">2022</option>
                                <option value="2">2021</option>
                                <option value="3">2020</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="price" class="form-label">Price</label>
                        <div class="d-flex">
                            <input type="text" class="form-control me-2" id="priceFrom" placeholder="From">
                            <input type="text" class="form-control" id="priceUntil" placeholder="Until">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="construction" class="form-label">Construction</label>
                        <select class="form-select" id="construction">
                            <option selected>All [181]</option>
                            <option value="1">Construction 1</option>
                            <option value="2">Construction 2</option>
                            <option value="3">Construction 3</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="searchTerm" class="form-label">Search for</label>
                        <input type="text" class="form-control" id="searchTerm" placeholder="Reference ID or search term">
                    </div>
                    <div class="col-md-3 d-flex align-items-end">
                        <button type="submit" class="btn btn-primary w-100">Search</button>
                    </div>

                    <div class="col-12 d-flex justify-content-between align-items-center mt-2">
                        <a href="#" class="text-primary">Reset</a>
                        <span>Your search criteria yielded 811 results</span>
                        <a href="#" class="text-primary">Save as truck alert</a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>
<br>
<section class="section">
    <div class="container-fluid container-custom">
        <div class="row g-3">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="d-flex align-items-center justify-content-between mb-4 pb-1">
                    <h4 class="flex-grow-1 mb-0">Products</h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
            <div class="col-xxl-3 col-lg-4 col-sm-6">
                <div
                    class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                    <div class="bg-light bg-opacity-50 rounded py-4 position-relative">
                        <img src="{{ asset('assets/images/products/img-35.jpg') }}" alt=""
                            style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                        <div class="action vstack gap-2">
                            <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action"
                                data-bs-toggle="button"><span class="icon-on"><i
                                        class="ri-heart-line"></i></span><span class="icon-off"><i
                                        class="ri-heart-fill"></i></span></button>
                        </div>
                    </div>
                    <div class="pt-4">
                        <a href="">
                            <h3>Iveco Daily 50 NP</h3>
                        </a>
                        <a href="">
                            <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">EUR0 6,CNG</h6>
                        </a>
                        <div class="mt-2">
                            <h5><span class="float-end">$13,900</span></h5>
                            <h5 class="title fw-normal"><span>ID : <span class="fw-semibold">223471</span></h5>

                        </div>
                        <div class="mt-3">
                            <a href="shop-cart.html" class="btn btn-primary w-100 add-btn">More Information</a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-xxl-3 col-lg-4 col-sm-6">
                <div
                    class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                    <div class="bg-light bg-opacity-50 rounded py-4 position-relative">
                        <img src="{{ asset('assets/images/products/img-35.jpg') }}" alt=""
                            style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                        <div class="action vstack gap-2">
                            <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action"
                                data-bs-toggle="button"><span class="icon-on"><i
                                        class="ri-heart-line"></i></span><span class="icon-off"><i
                                        class="ri-heart-fill"></i></span></button>
                        </div>
                    </div>
                    <div class="pt-4">
                        <a href="">
                            <h3>Iveco Daily 50 NP</h3>
                        </a>
                        <a href="">
                            <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">EUR0 6,CNG</h6>
                        </a>
                        <div class="mt-2">
                            <h5><span class="float-end">$13,900</span></h5>
                            <h5 class="title fw-normal"><span>ID : <span class="fw-semibold">223471</span></h5>

                        </div>
                        <div class="mt-3">
                            <a href="shop-cart.html" class="btn btn-primary w-100 add-btn">More Information</a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-xxl-3 col-lg-4 col-sm-6">
                <div
                    class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                    <div class="bg-light bg-opacity-50 rounded py-4 position-relative">
                        <img src="{{ asset('assets/images/products/img-35.jpg') }}" alt=""
                            style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                        <div class="action vstack gap-2">
                            <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action"
                                data-bs-toggle="button"><span class="icon-on"><i
                                        class="ri-heart-line"></i></span><span class="icon-off"><i
                                        class="ri-heart-fill"></i></span></button>
                        </div>
                    </div>
                    <div class="pt-4">
                        <a href="">
                            <h3>Iveco Daily 50 NP</h3>
                        </a>
                        <a href="">
                            <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">EUR0 6,CNG</h6>
                        </a>
                        <div class="mt-2">
                            <h5><span class="float-end">$13,900</span></h5>
                            <h5 class="title fw-normal"><span>ID : <span class="fw-semibold">223471</span></h5>

                        </div>
                        <div class="mt-3">
                            <a href="shop-cart.html" class="btn btn-primary w-100 add-btn">More Information</a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-xxl-3 col-lg-4 col-sm-6">
                <div
                    class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                    <div class="bg-light bg-opacity-50 rounded py-4 position-relative">
                        <img src="{{ asset('assets/images/products/img-35.jpg') }}" alt=""
                            style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                        <div class="action vstack gap-2">
                            <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action"
                                data-bs-toggle="button"><span class="icon-on"><i
                                        class="ri-heart-line"></i></span><span class="icon-off"><i
                                        class="ri-heart-fill"></i></span></button>
                        </div>
                    </div>
                    <div class="pt-4">
                        <a href="">
                            <h3>Iveco Daily 50 NP</h3>
                        </a>
                        <a href="">
                            <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">EUR0 6,CNG</h6>
                        </a>
                        <div class="mt-2">
                            <h5><span class="float-end">$13,900</span></h5>
                            <h5 class="title fw-normal"><span>ID : <span class="fw-semibold">223471</span></h5>

                        </div>
                        <div class="mt-3">
                            <a href="shop-cart.html" class="btn btn-primary w-100 add-btn">More Information</a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        {{-- <div class="text-center mt-4">
            <a href="product-grid-sidebar-banner.html" type="button" class="btn btn-warning btn-hover">
                View All Products <i class="bi bi-arrow-right"></i>
            </a>
        </div> --}}
    </div>
    <!--end section-->
    <div class="mt-4 text-center">
        <a href="product-list-defualt.html" class="btn btn-soft-primary btn-hover">View All Products <i class="mdi mdi-arrow-right align-middle ms-1"></i></a>
    </div>
</section>

@endsection
