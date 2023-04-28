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
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts 'resources/sass/app.scss', -->
    @vite(['resources/js/app.js'])
    <style>
        #logo {
            width: 50px;
            height: 50px;
            border-radius: 50px;
        }

        .barre-nav {
            background-color: #F17F23;
            width: 100%;
            height: 5px;
        }
    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img id="logo" src="{{asset('img/logo_BDE.jpg')}}">
                {{ config('app.name', 'BDE') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @if(request()->cookie('user') === null)
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">{{ __('Home') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/shopOffline')}}">{{ __('Shop') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">{{ __('Login') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/register') }}">{{ __('Register') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact')}}">{{ __('Contact') }}</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/home')}}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/shop')}}">{{ __('Shop') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/cart')}}"><i class="bi-cart"></i>{{ __('Cart') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Notifications <span class="badge">42</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item">
                                    Retrouvez vos notifications ici
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ json_decode(request()->cookie('user'))->name}}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="barre-nav">

    </div>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
