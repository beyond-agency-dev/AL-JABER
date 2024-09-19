<!doctype html>
<html lang="en" data-bs-theme="light" data-footer="dark">

<head>
    <meta charset="utf-8">
    <title> Index </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- App favicon -->
     <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

     <!-- head css -->
     <!-- extra css -->
     <!--Swiper slider css-->
     <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

     <!-- Bootstrap Css -->
     <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
     <!-- Icons Css -->
     <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
     <!-- App Css-->
     <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
     <!-- custom Css-->
     <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <style>
        .icon-grid {
          background-color: #f7f9fc;
          border-radius: 10px;
          padding: 20px;
          text-align: center;
        }
        .icon-grid i {
          font-size: 2rem;
          margin-bottom: 10px;
          color: #0056b3;
        }
        .icon-grid a {
          text-decoration: none;
          color: inherit;
        }
      </style>
</head>

<body>

    @include('includes.web.header-css')

    @yield('content')

    @include('includes.web.footer_scripts')



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/js/frontend/product-details.init.js')}}"></script>


      <!-- scripts -->
     <!-- JAVASCRIPT -->
     <script src="{{asset('assets/libs/bootstrap/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
     <script src="{{asset('assets/js/plugins.js')}}"></script>

     <!-- isotope-layout -->
     <script src="{{asset('assets/libs/isotope-layout/isotope.pkgd.min.js')}}"></script>

     <!--Swiper slider js-->
     <script src="{{asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>


     <!-- Countdown js -->
     <script src="{{asset('assets/js/pages/coming-soon.init.js')}}"></script>

     <script src="{{asset('assets/js/frontend/landing-index.init.js')}}"></script>

     <script src="{{asset('assets/js/frontend/menu.init.js')}}"></script>
     <script src="{{asset('assets/js/frontend/product-details.init.js')}}"></script>

</body>
</html>
