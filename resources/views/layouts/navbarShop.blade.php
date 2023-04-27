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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Scripts 'resources/sass/app.scss', -->
    @vite(['resources/js/app.js'])
    <style>
        #logo{
            width : 50px ;
            height : 50px ;
            border-radius : 50px ;
        }

        nav{
            background-color: #E09426;
        }
        li{
            margin-left: 10px;
            margin-right: 10px;
            display: inline-block;
            color: black;
        }

        input[type="text"] {
            background-color: #F3F3F2;
            border: none;
        }

    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                BDE SHOP
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item dropdown" id="categories">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
                        <ol class="dropdown-menu">
                            <a class="dropdown-item" href="#">Bottes</a>
                            <a class="dropdown-item" href="#">Sacs</a>
                            <a class="dropdown-item" href="#">Chapeaux</a>
                        </ol>
                    </li>

                    <li class="nav-item search-container">
                        <form action="" method="post">
                            <input type="text" autocomplete="on" placeholder="Enter the product name" name="search">
                            <i class="bi-search" type="submit"></i>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</div>

</body>
</html>
<?php
