<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin - Octanet Internet Service Provider</title>
    <link rel="icon" type="image/png" href="{{asset('assets/back/images/favicon.png')}}" sizes="16x16">
    <!-- remix icon font css  -->
    <link rel="stylesheet" href="{{asset('assets/back/css/remixicon.css')}}">
    <!-- BootStrap css -->
    <link rel="stylesheet" href="{{asset('assets/back/css/lib/bootstrap.min.css')}}">
    <!-- Apex Chart css -->
    <link rel="stylesheet" href="{{asset('assets/back/css/lib/apexcharts.css')}}">
    <!-- Data Table css -->
    <link rel="stylesheet" href="{{asset('assets/back/css/lib/dataTables.min.css')}}">
    <!-- Text Editor css -->
    <link rel="stylesheet" href="{{asset('assets/back/css/lib/editor-katex.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/back/css/lib/editor.atom-one-dark.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/back/css/lib/editor.quill.snow.css')}}">
    <!-- Date picker css -->
    <link rel="stylesheet" href="{{asset('assets/back/css/lib/flatpickr.min.css')}}">
    <!-- Calendar css -->
    <link rel="stylesheet" href="{{asset('assets/back/css/lib/full-calendar.css')}}">
    <!-- Vector Map css -->
    <link rel="stylesheet" href="{{asset('assets/back/css/lib/jquery-jvectormap-2.0.5.css')}}">
    <!-- Popup css -->
    <link rel="stylesheet" href="{{asset('assets/back/css/lib/magnific-popup.css')}}">
    <!-- Slick Slider css -->
    <link rel="stylesheet" href="{{asset('assets/back/css/lib/slick.css')}}">
    <!-- prism css -->
    <link rel="stylesheet" href="{{asset('assets/back/css/lib/prism.css')}}">
    <!-- file upload css -->
    <link rel="stylesheet" href="{{asset('assets/back/css/lib/file-upload.css')}}">

    <link rel="stylesheet" href="{{asset('assets/back/css/lib/audioplayer.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('assets/back/css/style.css')}}">

    <script src="https://code.iconify.design/iconify-icon/1.0.8/iconify-icon.min.js"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body>
    @include('sweetalert::alert')

    @include('components.admin.header')

    @include('components.admin.navigation')



    <div class="antialiased">
        {{ $slot }}
    </div>
    @include('components.admin.footer')

    <!-- jQuery library js -->
    <script src="{{ asset('assets/back/js/lib/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('assets/back/js/lib/bootstrap.bundle.min.js') }}"></script>
    <!-- Apex Chart js -->
    <!-- <script src="{{ asset('assets/back/js/lib/apexcharts.min.js') }}"></script> -->
    <!-- Data Table js -->
    <script src="{{ asset('assets/back/js/lib/dataTables.min.js') }}"></script>
    <!-- Iconify Font js -->
    <script src="{{ asset('assets/back/js/lib/iconify-icon.min.js') }}"></script>
    <!-- jQuery UI js -->
    <script src="{{ asset('assets/back/js/lib/jquery-ui.min.js') }}"></script>
    <!-- Vector Map js -->
    <script src="{{ asset('assets/back/js/lib/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('assets/back/js/lib/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- Popup js -->
    <script src="{{asset('assets/back/js/lib/magnifc-popup.min.js')}}"></script>
    <!-- Slick Slider js -->
    <script src="{{ asset('assets/back/js/lib/slick.min.js') }}"></script>
    <!-- prism js -->
    <script src="{{asset('assets/back/js/lib/prism.js')}}"></script>
    <!-- file upload js -->
    <script src="{{ asset('assets/back/js/lib/file-upload.js') }}"></script>
    <!-- audioplayer -->
    <script src="{{ asset('assets/back/js/lib/audioplayer.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('assets/back/js/app.js') }}"></script>

    <script src="{{asset('assets/back/js/jquery.validate.min.js')}}"></script>

    <!-- <script src="{{ asset('assets/back/js/homeOneChart.js') }}"></script> -->
    @stack('scripts')

</body>

</html>