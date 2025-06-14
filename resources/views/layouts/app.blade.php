<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/front-new/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/front-new/css/flaticon_akhas.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('assets/front-new/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-new/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-new/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-new/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-new/css/backtotop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-new/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-new/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-new/css/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-new/css/spacing.css') }}">
    <link rel="stylesheet" href="{{asset('assets/front-new/css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front-new/css/main.css') }}">
    <script src="https://code.iconify.design/iconify-icon/1.0.8/iconify-icon.min.js"></script>

    @stack('styles')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div
                    class="loading-icon animate-bounce text-center d-flex flex-column align-items-center justify-content-center">
                    <img src="{{ asset('assets/front-new/img/logo-octanet.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    @include('layouts.navigation')

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>


    @include('layouts.footer')
    @stack('scripts')

    <!-- JS here -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/front-new/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/slick.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/backtotop.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/counter.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/front-new/js/main.js') }}"></script>
</body>

</html>