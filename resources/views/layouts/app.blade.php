<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('PAKYOW')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css"/>
</head>
<body>

    <header>
        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="{{asset('images/header_logo.png')}}" alt="logo">
                    </div>
                    <div class="col-lg-7">
                        <nav>
                            <ul>
                                <li><a href="{{route('home')}}">HOME</a></li>
                                <li><a href="{{route('services')}}">SERVICES</a></li>
                                <li><a href="{{route('gallery')}}">GALLERY</a></li>
                                <li><a href="{{route('reviews')}}">REVIEWS</a></li>
                                <li><a href="{{route('contact')}}">CONTACT US</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 phone">
                        <a href="tel:707-337-2161"><img src="{{asset('images/phone.png')}}" alt="contact">707-337-2161</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="banner">
            <div class="container">
                <div class="row">
                    <img src="{{asset('images/banner.jpg')}}" alt="banner image">
                </div>
            </div>
        </div>
    </header>
    @yield('content')
</body>
</html>

