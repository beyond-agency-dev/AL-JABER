<!-- top tagbar -->
<div class="top-tagbar">
    <div class="w-100">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-4 col-9">
                <div class="fs-14 fw-medium">
                    <i class="bi bi-geo-alt align-middle me-2"></i>UAE
                </div>
            </div>
            <div class="col-md-4 col-6 d-none d-xxl-block">
                <div class="d-flex align-items-center justify-content-center gap-3 fs-14 fw-medium">
                    <div>
                        <i class="bi bi-envelope align-middle me-2"></i> support@aljabeer.com
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-3">
                <div class="d-flex align-items-center justify-content-end gap-3 fs-14">
                    <div class="text-reset fw-normal d-none d-lg-block">
                        <i class="bi bi-telephone-outbound align-middle me-2"></i> +(235) 01234 5678
                    </div>
                    <hr class="vr d-none d-lg-block">
                    <div class="dropdown topbar-head-dropdown topbar-tag-dropdown justify-content-end">
                        <button type="button" class="btn btn-icon btn-topbar text-reset rounded-circle fs-14 fw-medium"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="http://127.0.0.1:8000/assets/images/flags/us.svg" class="rounded-circle me-2"
                                alt="Header Language" height="16">
                            <span id="lang-name">English</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="http://127.0.0.1:8000/index/en" class="dropdown-item notify-item language py-2"
                                data-lang="en" title="English">
                                <img src="http://127.0.0.1:8000/assets/images/flags/us.svg" alt="user-image"
                                    class="me-2 rounded-circle" height="18">
                                <span class="align-middle">English</span>
                            </a>

                            <!-- item-->
                            <a href="http://127.0.0.1:8000/index/sp" class="dropdown-item notify-item language"
                                data-lang="sp" title="Spanish">
                                <img src="http://127.0.0.1:8000/assets/images/flags/spain.svg" alt="user-image"
                                    class="me-2 rounded-circle" height="18">
                                <span class="align-middle">Española</span>
                            </a>

                            <!-- item-->
                            <a href="http://127.0.0.1:8000/index/gr" class="dropdown-item notify-item language"
                                data-lang="gr" title="German">
                                <img src="http://127.0.0.1:8000/assets/images/flags/germany.svg" alt="user-image"
                                    class="me-2 rounded-circle" height="18"> <span
                                    class="align-middle">Deutsche</span>
                            </a>

                            <!-- item-->
                            <a href="http://127.0.0.1:8000/index/it" class="dropdown-item notify-item language"
                                data-lang="it" title="Italian">
                                <img src="http://127.0.0.1:8000/assets/images/flags/italy.svg" alt="user-image"
                                    class="me-2 rounded-circle" height="18">
                                <span class="align-middle">Italiana</span>
                            </a>

                            <!-- item-->
                            <a href="http://127.0.0.1:8000/index/ru" class="dropdown-item notify-item language"
                                data-lang="ru" title="Russian">
                                <img src="http://127.0.0.1:8000/assets/images/flags/russia.svg" alt="user-image"
                                    class="me-2 rounded-circle" height="18">
                                <span class="align-middle">русский</span>
                            </a>

                            <!-- item-->
                            <a href="http://127.0.0.1:8000/index/ch" class="dropdown-item notify-item language"
                                data-lang="ch" title="Chinese">
                                <img src="http://127.0.0.1:8000/assets/images/flags/china.svg" alt="user-image"
                                    class="me-2 rounded-circle" height="18">
                                <span class="align-middle">中国人</span>
                            </a>

                            <!-- item-->
                            <a href="http://127.0.0.1:8000/index/fr" class="dropdown-item notify-item language"
                                data-lang="fr" title="French">
                                <img src="http://127.0.0.1:8000/assets/images/flags/french.svg" alt="user-image"
                                    class="me-2 rounded-circle" height="18">
                                <span class="align-middle">français</span>
                            </a>
                            <!-- item-->
                            <a href="http://127.0.0.1:8000/index/sa" class="dropdown-item notify-item language"
                                data-lang="ae" title="Arabic">
                                <img src="http://127.0.0.1:8000/assets/images/flags/sa.svg" alt="user-image"
                                    class="me-2 rounded-circle" height="18">
                                <span class="align-middle">عربى</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- topbar -->
<nav class="navbar navbar-expand-lg ecommerce-navbar" style="background-color: #0B1729;">
    <div class="container">
        <a class="navbar-brand d-none d-lg-block" href="index">
            <div>
                <img src="{{asset('assets/images/logo1.png')}}" alt="" height="80">
            </div>

        </a>
        <button class="btn btn-soft-primary btn-icon d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="bi bi-list fs-20"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: 0B1729;" >
            <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0" id="navigation-menu">
                <li class="nav-item d-block d-lg-none">
                    <a class="d-block p-3 h-auto text-center" href="index.html">
                        <img src="{{asset('assets/images/logo1.png')}}" alt="" height="85"
                            class="card-logo-dark mx-auto">
                        <img src="{{asset('assets/images/logo1.png')}}" alt="" height="85"
                            class="card-logo-light mx-auto">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}" data-key="t-contact">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-key="t-contact">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-key="t-contact">Stock</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-key="t-contact">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-key="t-contact">Contact</a>
                </li>
            </ul>
        </div>
        <div class="bg-overlay navbar-overlay" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent.show"></div>

        <div class="d-flex align-items-center">
            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted"
                data-bs-toggle="modal" data-bs-target="#searchModal">
                <i class="bx bx-search fs-22"></i>
            </button>


            <div class="dropdown topbar-head-dropdown ms-2 header-item dropdown-hover-end">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-sun align-middle fs-20"></i>
                </button>
                <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                    <a href="#!" class="dropdown-item" data-mode="light"><i
                            class="bi bi-sun align-middle me-2"></i> Defualt (light mode)</a>
                    <a href="#!" class="dropdown-item" data-mode="dark"><i
                            class="bi bi-moon align-middle me-2"></i> Dark</a>
                    <a href="#!" class="dropdown-item" data-mode="auto"><i
                            class="bi bi-moon-stars align-middle me-2"></i> Auto (system defualt)</a>
                </div>
            </div>

        </div>
    </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded">
            <div class="modal-header p-3">
                <div class="position-relative w-100">
                    <input type="text" class="form-control form-control-lg border-2"
                        placeholder="Search for Toner..." autocomplete="off" id="search-options" value="">
                    <span class="bi bi-search search-widget-icon fs-17"></span>
                    <a href="javascript:void(0);"
                        class="search-widget-icon fs-14 link-secondary text-decoration-underline search-widget-icon-close d-none"
                        id="search-close-options">Clear</a>
                </div>
            </div>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 overflow-hidden" id="search-dropdown">

                <div class="dropdown-head rounded-top">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 fs-14 text-muted fw-semibold"> RECENT SEARCHES </h6>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-item bg-transparent text-wrap">
                        <a href="index" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i
                                class="mdi mdi-magnify ms-1 align-middle"></i></a>
                        <a href="index" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i
                                class="mdi mdi-magnify ms-1 align-middle"></i></a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>




<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-info btn-icon" style="bottom: 50px;" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->
