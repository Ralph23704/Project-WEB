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
    @vite(['resources/css/header.css','resources/css/shop.css','resources/css/footer.css','resources/js/app.js'])
</head>

<body>
<nav class="navbar container" id="vue">
    <select class="nav-item" name="vue">
        <option value="boutique" class="title2">
            Boutique
        </option>
        <option value="Blog" class="title2">
            Blog
        </option>
    </select>
</nav>

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
            <i class="bi-person"></i>
            <a href="" class="body">Account</a>
        </li>

        <li class="nav-item">
            <i class="bi-cart"></i>
            <a href="cart" class="body">Cart</a>
        </li>
        <li>
            <i class="bi bi-plus"></i>
        </li>
        </ul>
        </li>
    </ul>
</div>

<!--Annonces-->
<div class="container-fluid mt-3 mb-3" id="carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/image.jpg')}}" class="d-block w-100 h-100" alt="Not found...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/goodie.jpg')}}" class="d-block w-100 h-100" alt="Not found...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/one.jpg')}}" class="d-block w-100 h-100" alt="Not found...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!--Les plus commandés-->
<div class="container-fluid mt-3">
   <h1 class="title1">Les Plus commandés</h1><hr>
</div>
<!--Elements-->
<div id="carouselExample" class="carousel carousel-dark slide best">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card carte">
                <img src="{{asset('img/objet.jpeg')}}" class="card-img-top" alt="Not Found">
                <div class="card-body">
                    <h5 class="card-title">Nom</h5>
                    <p class="card-text">Prix
                        <i class="bi-cart add"></i>
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card carte">
                <img src="{{asset('img/objets-publicitaires.jpg')}}" class="card-img-top" alt="Not Found">
                <div class="card-body">
                    <h5 class="card-title">Nom</h5>
                    <p class="card-text">Prix
                        <i class="bi-cart add"></i>
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card carte">
                <img src="{{asset('img/objet.jpeg')}}" class="card-img-top" alt="Not Found">
                <div class="card-body">
                    <h5 class="card-title">Nom</h5>
                    <p class="card-text">Prix
                        <i class="bi-cart add"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!--Produits-->
<div class="container-fluid mt-3" id="produit">
    <div class="row title1"><h1>Nos Produits</h1></div><hr>

    <!--Tri-->
    <div class="container-fluid">
        <li class="nav-item dropdown down">
            <a class="dropdown-toggle body sort" data-bs-toggle="dropdown">Prices</a>
            <ol class="dropdown-menu">
                <a class="dropdown-item body" href="#">moins de 1000frs</a>
                <a class="dropdown-item body" href="#">1000frs</a>
                <a class="dropdown-item body" href="#">Plus de 1000frs</a>
            </ol>
        </li>

        <li class="nav-item dropdown down" id="sort">
            <a class="dropdown-toggle body sort" data-bs-toggle="dropdown">Sort By</a>
            <ol class="dropdown-menu">
                <a class="dropdown-item body" href="#">Le moins cher</a>
                <a class="dropdown-item body" href="#">le plus cher</a>
                <a class="dropdown-item body" href="#">Ordre alphabetique</a>
            </ol>
        </li>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-3 mt-3">
                <div class="card carte">
                    <img src="{{asset('img/objet.jpeg')}}" class="card-img-top" alt="Not Found">
                    <div class="card-body">
                        <h5 class="card-title">Nom</h5>
                        <p class="card-text">Prix
                            <i class="bi-cart add"></i>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-3 mt-3">
                <div class="card carte">
                    <img src="{{asset('img/objets-publicitaires.jpg')}}" class="card-img-top" alt="Not Found">
                    <div class="card-body">
                        <h5 class="card-title">Nom</h5>
                        <p class="card-text">Prix
                            <i class="bi-cart add"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid body mt-3" id="footer">
    Copyright Group 1 X2026
</div>
</body>
</html>
