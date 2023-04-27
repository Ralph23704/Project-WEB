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
    @vite(['resources/js/app.js','resources/css/header.css'])
</head>
<body>
<div id="nav">

    <div class="container-fluid" id="shop">
        <ul class="nav-list">
            <li class="nav-item img-fluid">
                <img src="{{asset('img/logo_BDE.jpg')}}" alt="logo" id="logo">
                <span class="nav-item header">BDE_SHOP</span>
            </li>

            <li id="header"> <div id="menu-burger">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <ul>
                    <li class="nav-item dropdown down">
                        <a class="dropdown-toggle body" data-bs-toggle="dropdown">Categories</a>
                        <ol class="dropdown-menu">
                            <a class="dropdown-item body" href="#">Bottes</a>
                            <a class="dropdown-item body" href="#">Sacs</a>
                            <a class="dropdown-item body" href="#">Chapeaux</a>
                        </ol>
                    </li>

                    <li class="nav-item form-inline search-container">
                        <form action="" method="post">
                            <input type="text" autocomplete="on" placeholder="Enter the product name" name="search">
                            <i class="bi-search" type="submit"></i>
                        </form>
                    </li>

                    <li class="nav-item">
                        <i class="bi-house"></i>
                        <a href="shop" class="body">Home</a>
                    </li>

                    <li class="nav-item">
                        <i class="bi-cart"></i>
                        <a href="cart" class="body">Cart</a>
                    </li>
                    <li>
                        <i class="bi bi-plus"></i>
                    </li>

                    <li class="nav-item">
                        <i class="bi-person"></i>
                        <a href="" class="body" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Account</a>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <img src="" alt="ProfilPicture">
                                <h5 id="offcanvasRightLabel">Nom</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                Modifier nom, prenom, etc
                                <a>Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</div>

</body>
</html>
<?php
