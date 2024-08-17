<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-body-image="none">

<head>
    <meta charset="utf-8">
    <title> Admin @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- head css -->
    @include('includes.admin.header-css')
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- top tagbar -->
        @include('includes.admin.top-tagbar')
        <!-- topbar -->
        @include('includes.admin.topbar')

        <!-- ========== App Menu ========== -->
        @include('includes.admin.side-menu')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                    <!-- End Page-content -->
                    <!-- footer -->
                    @include('includes.admin.footer')
                </div>
            </div>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- customizer -->
    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-info btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->


    <!-- scripts -->
    <!-- JAVASCRIPT -->
    @include('includes.admin.footer-script')
</body>

</html>
