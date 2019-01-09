<!DOCTYPE html>
<html lang="en">

<head>
    <title>PhotoVault | @yield('title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('layouts.nav')

    <div class="nav-bar-sep d-lg-none"></div>

    @yield('content')

    <div class="scroll-down flex flex-column justify-content-center align-items-center d-none d-lg-block">
        <span class="arrow-down flex justify-content-center align-items-center"><img src="{{ asset('images/arrow-down.png') }}" alt="arrow"></span>
        <span class="scroll-text">Scroll Down</span>
    </div>
    <!-- .scroll-down -->

    <script type='text/javascript' src='{{ asset('js/jquery.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/custom.js') }}'></script>

</body>

</html>