<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body>
<nav class="navbar">
    <select class="nav-item" name="vue">
        <option value="boutique">
            Boutique
        </option>
        <option value="Blog">
            Blog
        </option>
    </select>
</nav>

<nav class="navbar">
    <div class="navbar-brand">
        <img src="{{asset('img/logo_BDE.jpg')}}" alt="logo">
    </div>
    <h1 class="nav-item">BDE_SHOP</h1>
    <div class="nav-item dropdown">
        <a class="dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
        <ul class="dropdown-menu">
            <a class="dropdown-item" href="#">Bottes</a>
            <a class="dropdown-item" href="#">Sacs</a>
            <a class="dropdown-item" href="#">Chapeaux</a>
        </ul>
    </div>

    <form class="nav-item" action="" method="post">
        <input type="text" autocomplete="on" placeholder="Enter the product name" name="search">
        <i class="bi-search" type="submit"></i>
    </form>

    <div class="nav-item">
        <i class="bi-person"></i>
        <a href="">Account</a>
    </div>

    <div class="nav-item">
        <i class="bi-cart"></i>
        <a href="">Cart</a>
    </div>


</nav>
</body>

</html>
