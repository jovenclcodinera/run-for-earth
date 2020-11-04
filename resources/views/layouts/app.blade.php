<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Droid Sans', 'Arial', 'sans-serif' !important;
            font-size: 14px !important;
            background-color: #ffffff;
        }
        .nav-link {
            color: black !important;
        }
        .nav-link.active {
            color: #0068ac !important;
        }
    </style>
    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm fixed-top" style="background-color: #ffffff">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('images/logo.png')}}" alt="logo-image" class="img-fluid w-75">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="/"
                                class="{{(request()->is('/')) ? 'nav-link active' : 'nav-link'}}">
                                HOME
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/#" class="nav-link">RUN INFORMATION</a>
                        </li>
                        <li class="nav-item">
                            <a href="/#" class="nav-link">REGISTRATION</a>
                        </li>
                        <li class="nav-item">
                            <a href="/#" class="nav-link">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="mt-5">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(window).scroll(() => {
            let scroll = $(window).scrollTop();
            if (scroll >= 600) {
                $('.navbar').css('background', '#7FB4D6');
            } else {
                $('.navbar').css('background', '#ffffff');
            }
        });
    </script>
    @yield('scripts')
</body>
</html>
