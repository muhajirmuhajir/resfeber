<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Resfeber - Explore the globe with us</title>
    <meta name="author" content="tansh">
    <meta name="description" content="HTML Landing Page Teamplate">
    <meta name="keywords" content="real estate, agency, business, one page">

    <!-- FAVICON FILES -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('backpage/images/favicon.png')}}">
    <link href="{{url('frontpage/assets/images/icons/apple-touch-icon-144-precomposed.png')}}" rel="apple-touch-icon"
        sizes="144x144">
    <link href="{{url('frontpage/assets/images/icons/apple-touch-icon-120-precomposed.png')}}" rel="apple-touch-icon"
        sizes="120x120">
    <link href="{{url('frontpage/assets/images/icons/apple-touch-icon-76-precomposed.png')}}" rel="apple-touch-icon"
        sizes="76x76">
    <link href="{{url('frontpage/assets/images/icons/favicon.png" rel="shortcut icon')}}">

    <!--AOS-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--GSAP-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{url('frontpage/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontpage/assets/fonts/iconfonts.css')}}">
    <link rel="stylesheet" href="{{url('frontpage/assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{url('frontpage/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontpage/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('frontpage/assets/css/color.css')}}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <!-- The "defer" attribute is important to make sure Alpine waits for Livewire to load first. -->
    @yield('style')
</head>

<body>
    <div id="dtr-wrapper" class="clearfix">

        <!-- preloader starts -->
        <div class="dtr-preloader">
            <div class="dtr-preloader-inner">
                <div class="dtr-loader">Loading...</div>
            </div>
        </div>
        <!-- preloader ends -->
        @include('includes.navbar')

        <div class="bg-wrapper">
            <!-- == main content starts == -->
            @yield('content')

            @if (Route::currentRouteName() != 'about')
            @include('includes.footer')
            @endif

        </div>
    </div>
    <!-- #dtr-wrapper ends -->

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
             AOS.init();
        </script>

    <!-- JS FILES -->
    <script src="{{url('frontpage/assets/js/jquery.min.js')}}"></script>
    <script src="{{url('frontpage/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontpage/assets/js/plugins.js')}}"></script>
    <script src="{{url('frontpage/assets/js/slick.min.js')}}"></script>
    <script src="{{url('frontpage/assets/js/custom.js')}}"></script>

    @yield('script')
</body>

</html>
