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
    <style>
        nav a{text-decoration: none;}
        #shop{height: 50px}
        #vue{justify-content: right; background-color: #F3F3F2}
        #logo{border-radius: 20px}
        .nav-list{position: relative;align-self: center;align-content: space-between}
        #header{position: relative; }

        li {
            list-style:none !important; /*On enlève les puces de la liste */
            text-decoration:none;
            display: inline-block;
            padding-right: 10px;
            padding-left: 10px;

        }
        .navbar a{color: black}
        select{background-color: #F3F3F2; border-radius: 20px;border-color:#F3F3F2; color: #E09426 }
        .down{background-color: #F3F3F2; border-radius: 20px;color: black;}
        .search-container input[type="text"] {
            background-color: #F3F3F2;
            border: none;}

        .search-container{background-color: #F3F3F2; border-radius: 20px }

        hr{color: #489BBD; height: 5px; line-height: 10px}

        /* Menu burger */
        #menu-burger {float: right; display:none; cursor:pointer;}
        #menu-burger .bar1,
        #menu-burger .bar3 {width:32px; height:5px; margin:6px 0;background-color:black; transition:0.4s;border-radius: 20px}
        #menu-burger .bar2{width:26px; height:5px; margin:6px 0;background-color:black; transition:0.4s;border-radius: 20px}

        /* Activer responsive*/
        @media screen and (max-width: 1000px){
            #menu-burger{
                display: inline-block;
            }

            #header ul{
                display: none;
            }
        }
    </style>
@vite(['resources/css/app.css','resources/js/app.js'])
<body>
<div class="container-fluid" id="shop">
    <nav class="navbar">
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
    </nav>
</div>

<div class="container-fluid mt-3" id="banner">
    <img src="{{asset('img/goodie.jpg')}}" alt="Not Found"  style="position:relative;width: 100%;height: 150px">
</div>

<!--Les plus commandés-->
<div class="container-fluid mt-3">
    <div class="row title1"><h1>Votre Panier</h1></div><hr>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="{{asset('img/objet.jpeg')}}" class="card-img-top" alt="Not Found">
            </div>

            <div class="col-9">
                <h5>Nom</h5>
                <p>Description
                    <i style="float: right">Price</i>
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                <img src="{{asset('img/objet.jpeg')}}" class="card-img-top" alt="Not Found">
            </div>

            <div class="col-9">
                <h5>Nom</h5>
                <p>Description
                    <i style="float: right">Price</i>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-3" id="buy">
    <h5>Prix Total : ...</h5>
    <button style="border-radius: 20px; background-color: #E09426; border-color: #E09426; float: right;">Buy Now</button>
</div>


</body>
</html>
