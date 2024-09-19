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
                            <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                        </ol>
                    </nav>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
    <section class="section">

        <div class="container-fluid" style="padding-left: 100px;padding-right:50px;">
            <div class="row gx-2">
                <div class="col-lg-5" style="margin-right: 30px;">
                    <div class="row">
                        <div class="col-md-2">
                            <div thumbsSlider="" class="swiper productSwiper mb-3 mb-lg-0">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-thumb rounded cursor-pointer">
                                            <img src="{{ asset('assets/images/products/img-35.jpg') }}" alt=""
                                                class="img-fluid" />
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="product-thumb rounded cursor-pointer">
                                            <img src="{{ asset('assets/images/products/img-36.jpg') }}" alt=""
                                                class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-thumb rounded cursor-pointer">
                                            <img src="{{ asset('assets/images/products/img-35.jpg') }}" alt=""
                                                class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-thumb rounded cursor-pointer">
                                            <img src="{{ asset('assets/images/products/img-35.jpg') }}" alt=""
                                                class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-thumb rounded cursor-pointer">
                                            <img src="{{ asset('assets/images/products/img-35.jpg') }}" alt=""
                                                class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-md-10">
                            <div class="bg-light rounded-2 position-relative ribbon-box overflow-hidden">
                                <div class="ribbon ribbon-danger ribbon-shape trending-ribbon">
                                    <span class="trending-ribbon-text">Trending</span> <i
                                        class="ri-flashlight-fill text-white align-bottom float-end ms-1"></i>
                                </div>
                                <div class="swiper productSwiper2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide ">
                                            <img src="{{ asset('assets/images/products/img-35.jpg') }}" alt=""
                                                class="img-fluid" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/products/img-36.jpg') }}" alt=""
                                                class="img-fluid" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/products/img-36.jpg') }}" alt=""
                                                class="img-fluid" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/products/img-36.jpg') }}" alt=""
                                                class="img-fluid" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/products/img-36.jpg') }}" alt=""
                                                class="img-fluid" />
                                        </div>

                                    </div>
                                    <div class="swiper-button-next bg-transparent"></div>
                                    <div class="swiper-button-prev bg-transparent"></div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-12">
                            <div class="mt-3">
                                <div class="hstack gap-2">
                                    {{-- <button type="button" class="btn btn-success btn-hover w-100">
                                        <i class="bi bi-basket2 me-2"></i> Add To Cart
                                    </button> --}}
                                    <button type="button" class="btn btn-primary btn-hover w-100">
                                        <i class="bi bi-phone me-2"></i> Enquire Now
                                    </button>
                                    <button class="btn btn-soft-danger custom-toggle btn-hover" data-bs-toggle="button"
                                        aria-pressed="true"> <span class="icon-on"><i class="ri-heart-line"></i></span>
                                        <span class="icon-off"><i class="ri-heart-fill"></i></span> </button>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div>
                    <!--end row-->
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-10">
                          <div class="icon-grid">
                            <h5>Are you interested in this model?</h5>
                            <div class="row">
                              <div class="col-4">
                                <a href="#">
                                  <i class="fas fa-phone"></i>
                                  <p>Call</p>
                                </a>
                              </div>
                              <div class="col-4">
                                <a href="#">
                                  <i class="fab fa-whatsapp"></i>
                                  <p>WhatsApp</p>
                                </a>
                              </div>
                              <div class="col-4">
                                <a href="#">
                                  <i class="fas fa-envelope"></i>
                                  <p>Email</p>
                                </a>
                              </div>
                            </div>
                            <div class="row mt-3">
                              <div class="col-4">
                                <a href="#">
                                  <i class="fas fa-star"></i>
                                  <p>Favorite</p>
                                </a>
                              </div>
                              <div class="col-4">
                                <a href="#">
                                  <i class="fas fa-download"></i>
                                  <p>Download</p>
                                </a>
                              </div>
                              <div class="col-4">
                                <a href="#">
                                  <i class="fas fa-print"></i>
                                  <p>Print</p>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="ecommerce-product-widgets mt-4 mt-lg-0">
                        <div class="mb-4">
                            {{-- <div class="d-flex gap-3 mb-2">
                                    <div class="fs-15 text-warning">
                                        <i class="ri-star-fill align-bottom"></i>
                                        <i class="ri-star-fill align-bottom"></i>
                                        <i class="ri-star-fill align-bottom"></i>
                                        <i class="ri-star-fill align-bottom"></i>
                                        <i class="ri-star-half-fill align-bottom"></i>
                                    </div>
                                    <span class="fw-medium"> (50 Review)</span>
                                </div> --}}
                            <h2 class="lh-base mb-1" style="color: rgb(139, 14, 14)">Mercedes Actros 1843</h2><br>
                            {{-- <p class="text-muted mb-4">The best part about stripped t shirt denim & white sneakers or wear it with a cool chinos and blazer to dress up <a href="javascript:void(0);" class="link-info">Read More</a></p> --}}
                            <h5 class="fs-24 mb-4">€15,900 <span class="text-muted fs-14"><del>$280.99</del></span> <span
                                    class="fs-14 ms-2 text-danger"> (50% off)</span></h5>
                            <h6>
                                ID 974078
                            </h6>

                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-pills nav-success mb-3" role="tablist">
                                                <li class="nav-item ">
                                                    <a class="nav-link active" data-bs-toggle="tab"
                                                        href="#animation-home" role="tab">
                                                        Tractor unit
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#animation-profile"
                                                        role="tab">
                                                        Fuel
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#animation-messages"
                                                        role="tab">
                                                        Options and accessories
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#animation-settings"
                                                        role="tab">
                                                        Axle configuration
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="animation-home" role="tabpanel">
                                                    <div class="d-flex">

                                                        <div class="flex-grow-1 ms-2">
                                                            <div id="vehicle"
                                                                class="collapse show d-md-block pb-1
                                                                       d-print-block
                                                           ">
                                                                <div
                                                                    class="h3 font-weight-bold d-none d-print-block p-print-2">
                                                                    Tractor unit</div>

                                                                <div class=" p-0_5 p-print-2">
                                                                    <div class="row">
                                                                        <div class="col-5 d-print-inline-block w-print-50">
                                                                            Condition</div>

                                                                        <div class="col-7 d-print-inline-block w-print-50">
                                                                            Used
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-light p-0_5 p-print-2">
                                                                    <div class="row">
                                                                        <div class="col-5 d-print-inline-block w-print-50">
                                                                            Brand</div>

                                                                        <div class="col-7 d-print-inline-block w-print-50">
                                                                            Mercedes
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class=" p-0_5 p-print-2">
                                                                    <div class="row">
                                                                        <div class="col-5 d-print-inline-block w-print-50">
                                                                            Vehicletype</div>

                                                                        <div class="col-7 d-print-inline-block w-print-50">
                                                                            Actros 1843
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-light p-0_5 p-print-2">
                                                                    <div class="row">
                                                                        <div class="col-5 d-print-inline-block w-print-50">
                                                                            Chassis number</div>

                                                                        <div class="col-7 d-print-inline-block w-print-50">
                                                                            WDB9634031L974078
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=" p-0_5 p-print-2">
                                                                    <div class="row">
                                                                        <div class="col-5 d-print-inline-block w-print-50">
                                                                            Registration year</div>

                                                                        <div class="col-7 d-print-inline-block w-print-50">
                                                                            2015
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-light p-0_5 p-print-2">
                                                                    <div class="row">
                                                                        <div class="col-5 d-print-inline-block w-print-50">
                                                                            MOT</div>

                                                                        <div class="col-7 d-print-inline-block w-print-50">
                                                                            24-04-2024

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=" p-0_5 p-print-2">
                                                                    <div class="row">
                                                                        <div class="col-5 d-print-inline-block w-print-50">
                                                                            First registration</div>

                                                                        <div class="col-7 d-print-inline-block w-print-50">
                                                                            28-07-2015

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-light p-0_5 p-print-2">
                                                                    <div class="row">
                                                                        <div class="col-5 d-print-inline-block w-print-50">
                                                                            Empty weight</div>

                                                                        <div class="col-7 d-print-inline-block w-print-50">
                                                                            7.625kg
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=" p-0_5 p-print-2">
                                                                    <div class="row">
                                                                        <div class="col-5 d-print-inline-block w-print-50">
                                                                            Category</div>

                                                                        <div class="col-7 d-print-inline-block w-print-50">
                                                                            Standard tractor
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-light p-0_5 p-print-2">
                                                                    <div class="row">
                                                                        <div class="col-5 d-print-inline-block w-print-50">
                                                                            Color</div>

                                                                        <div class="col-7 d-print-inline-block w-print-50">
                                                                            White
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=" p-0_5 p-print-2">
                                                                    <div class="row">
                                                                        <div class="col-5 d-print-inline-block w-print-50">
                                                                            Tachograph</div>

                                                                        <div class="col-7 d-print-inline-block w-print-50">
                                                                            Digital
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="tab-pane" id="animation-profile" role="tabpanel">
                                                    <div class="d-flex">

                                                        <div class="flex-grow-1 ms-2">
                                                            <div id="fuel"
                                                                class="collapse show d-md-block pb-1 d-print-none">
                                                                <div
                                                                    class="h3 font-weight-bold d-none d-print-block p-print-2">
                                                                    Fuel</div>

                                                                <div class=" p-0_5 p-print-2">
                                                                    <div class="row">
                                                                        <div class="col-5 d-print-inline-block w-print-50">
                                                                            Fuel</div>

                                                                        <div class="col-7 d-print-inline-block w-print-50">
                                                                            Diesel
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-light p-0_5 p-print-2">
                                                                    <div class="row">
                                                                        <div class="col-5 d-print-inline-block w-print-50">
                                                                            Emission class</div>

                                                                        <div class="col-7 d-print-inline-block w-print-50">
                                                                            Euro 6
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=" p-0_5 p-print-2">
                                                                    <div class="row">
                                                                        <div class="col-5 d-print-inline-block w-print-50">
                                                                            Number of tanks</div>

                                                                        <div class="col-7 d-print-inline-block w-print-50">
                                                                            1
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="animation-messages" role="tabpanel">
                                                    <div class="d-flex">

                                                        <div class="flex-grow-1 ms-2">
                                                            <div id="options_and_accessories"
                                                                class="collapse show d-md-block pb-1 d-print-block">
                                                                <div
                                                                    class="h3 font-weight-bold d-none d-print-block p-print-2">
                                                                    Options and accessories</div>


                                                                <div class=" p-0_5 p-print-2">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-sm-5 col-lg-12 col-xxl-5 d-print-block w-print-100prct">
                                                                            <ul class="fa-ul mb-0">
                                                                                <li>
                                                                                    <span class="fa-li"><i
                                                                                            class="fas fa-check-circle fa-lg text-success"></i></span>Air
                                                                                    conditioning
                                                                                </li>

                                                                                <li>
                                                                                    <span class="fa-li"><i
                                                                                            class="fas fa-check-circle fa-lg text-success"></i></span>Anti-lock
                                                                                    braking system
                                                                                </li>

                                                                                <li>
                                                                                    <span class="fa-li"><i
                                                                                            class="fas fa-check-circle fa-lg text-success"></i></span>Automatic
                                                                                    gearbox
                                                                                </li>

                                                                                <li>
                                                                                    <span class="fa-li"><i
                                                                                            class="fas fa-check-circle fa-lg text-success"></i></span>Cruise
                                                                                    control
                                                                                </li>

                                                                                <li>
                                                                                    <span class="fa-li"><i
                                                                                            class="fas fa-check-circle fa-lg text-success"></i></span>Differential
                                                                                    lock
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div
                                                                            class="col-sm-5 col-lg-12 col-xxl-5 d-print-block w-print-100prct">
                                                                            <ul class="fa-ul mb-0">

                                                                                <li>
                                                                                    <span class="fa-li"><i
                                                                                            class="fas fa-check-circle fa-lg text-success"></i></span>Fridge
                                                                                </li>

                                                                                <li>
                                                                                    <span class="fa-li"><i
                                                                                            class="fas fa-check-circle fa-lg text-success"></i></span>Retarder
                                                                                </li>

                                                                                <li>
                                                                                    <span class="fa-li"><i
                                                                                            class="fas fa-check-circle fa-lg text-success"></i></span>Twin
                                                                                    bed
                                                                                </li>

                                                                                <li>
                                                                                    <span class="fa-li"><i
                                                                                            class="fas fa-check-circle fa-lg text-success"></i></span>Vehicle
                                                                                    heater
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="tab-pane" id="animation-settings" role="tabpanel">

                                                    <div class="d-flex mt-2">

                                                        <div class="flex-grow-1 ms-2">
                                                            <div id="axlesinfo" class="collapse d-md-block pb-1 show">
                                                                <div
                                                                    class="h3 font-weight-bold d-none d-print-block p-print-2">
                                                                    Axleconfiguration 4x2</div>



                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="table-responsive-md">
                                                                            <table
                                                                                class="table table-borderless table-striped">
                                                                                <thead>
                                                                                    <th></th>
                                                                                    <th>1</th>
                                                                                    <th>2</th>

                                                                                </thead>
                                                                                <tr class="border-print-top">
                                                                                    <td>Position</td>
                                                                                    <td>Front</td>
                                                                                    <td>Rear</td>
                                                                                </tr>
                                                                                <tr class="border-print-top">
                                                                                    <td>Powered</td>
                                                                                    <td>No</td>
                                                                                    <td>Yes</td>
                                                                                </tr>
                                                                                <tr class="border-print-top">
                                                                                    <td>Differential lock</td>
                                                                                    <td>No</td>
                                                                                    <td>Yes</td>
                                                                                </tr>
                                                                                <tr class="border-print-top">
                                                                                    <td>Steering axle</td>
                                                                                    <td>Yes</td>
                                                                                    <td>No</td>
                                                                                </tr>
                                                                                <tr class="border-print-top">
                                                                                    <td>Twin wheels</td>
                                                                                    <td>No</td>
                                                                                    <td>Yes</td>
                                                                                </tr>
                                                                                <tr class="border-print-top">
                                                                                    <td>Suspension</td>
                                                                                    <td>Leaf</td>
                                                                                    <td>Air</td>
                                                                                </tr>

                                                                            </table>
                                                                            <div class="table-help-text pt-1 text-center text-black-50"
                                                                                style="display:none;">Swipe voor meer
                                                                                informatie<i
                                                                                    class="fas fa-arrows-alt-h"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div><!-- end card-body -->
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <div class="row">

                                <div class="col-xxl-4 col-lg-6 mb-4">
                                    <div class="card bg-success bg-opacity-10 border-0 h-100">
                                        <div class="card-body">
                                            <div class="d-flex gap-3">
                                                <div class="flex-grow-1">
                                                    <h6 class="fs-18 mb-3">Mileage</h6>
                                                    <p class="mb-0 fw-medium">673.000Km</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-lg-6 mb-4">
                                    <div class="card bg-primary bg-opacity-10 border-0 h-100">
                                        <div class="card-body">
                                            <div class="d-flex gap-3">
                                                <div class="flex-grow-1">
                                                    <h6 class="fs-18 mb-3">Engine Power</h6>
                                                    <p class="mb-0">430hp</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-lg-6 mb-4">
                                    <div class="card bg-info bg-opacity-10 border-0 h-100">
                                        <div class="card-body">
                                            <div class="d-flex gap-3">
                                                <div class="flex-grow-1">
                                                    <h6 class="fs-18 mb-3">Transmission</h6>
                                                    <p class="mb-0">Automatic</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

            </div><!--end container-->
    </section>

    <section class="section">
        <div class="container-fluid container-custom">
            <div class="row g-3">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-1">
                        <h4 class="flex-grow-1 mb-0">Similar Vehicles</h4>
                        <div class="flex-shrink-0">
                            <a href="product-grid-defualt.html" class="link-effect link-secondary">All Products <i
                                    class="ri-arrow-right-line ms-1 align-bottom"></i></a>
                        </div>
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
        </div><!--end section-->
    </section>


    <section class="position-relative py-5">
        <div class="container">
            <div class="row gy-4 gy-lg-0">
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="../assets/images/ecommerce/fast-delivery.png" alt="" class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">Fast &amp; Secure Delivery</h5>
                            <p class="text-muted mb-0">Tell about your service.</p>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="../assets/images/ecommerce/returns.png" alt="" class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">2 Days Return Policy</h5>
                            <p class="text-muted mb-0">No question ask.</p>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="../assets/images/ecommerce/guarantee-certificate.png" alt=""
                                class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">Money Back Guarantee</h5>
                            <p class="text-muted mb-0">Within 5 business days</p>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="../assets/images/ecommerce/24-hours-support.png" alt="" class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">24 X 7 Service</h5>
                            <p class="text-muted mb-0">Online service for customer</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
        <!--end container-->
    </section>
@endsection
