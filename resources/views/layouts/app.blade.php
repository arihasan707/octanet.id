<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--favicon icon-->
    <link rel="icon" href="{{ asset('assets/front/img/favicon.png') }}" type="image/png" sizes="16x16" />

    <!--title-->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--build:css-->
    <link id="theme-style" href="{{ asset('assets/front/css/main.css') }}" as="style" rel="stylesheet" />
    <link id="theme-dynamic" href="" as="style" rel="stylesheet" />
    <!-- endbuild -->

    @stack('styles')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">

    @include('layouts.navigation')

    <!-- Page Content -->
    <div class="main bg-[rgb(243 243 243)]">
        {{ $slot }}
    </div>

    @include('layouts.footer')

    @stack('scripts')
</body>

</html>