@extends('layouts.navbarShop')
@section('content')
    @include('layouts.navbarShop')
    @vite(['resources/css/shop.css','resources/css/footer.css','resources/js/app.js'])
<!--Annonces-->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .carousel {
            width: 100%;
            overflow: hidden;
        }

        .carousel__wrapper {
            display: flex;
            flex-wrap: nowrap;
            transition: transform 0.3s ease-in-out;
        }

        .carousel__item {
            flex: 0 0 33.33%;
            max-width: 33.33%;
            padding: 10px;
            box-sizing: border-box;
        }

        .carousel__item img {
            width: 100%;
        }

        .carousel__controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px 0;
        }

        .carousel__button {
            cursor: pointer;
            background-color: #fff;
            border: none;
            outline: none;
            font-size: 24px;
            padding: 10px;
            border-radius: 50%;
            transition: background-color 0.3s ease-in-out;
        }

        .carousel__button:hover {
            background-color: #ccc;
        }

        @media screen and (max-width: 768px) {
            .carousel__item {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media screen and (max-width: 480px) {
            .carousel__item {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        .carte{
            position: relative;
            width: 253px;
            height: 229px;
            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0.25, 0.25, 0.25, 0.25);
            border-radius: 10px;
            transform: scale(1);
            transition-property: transform;
            transition-duration: 400ms;
            /*margin-left: 150px;*/
        }
        .carte:hover{
            transform: scale(1.15);
            cursor: pointer;
        }
    </style>
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
<div class="carousel">
    <div class="carousel__wrapper">
        @foreach($product as $data)
        <div class="carousel__item">
            <div class="card carte">
                <img src="{{'img/'.$data->image}}" class="card-img-top" alt="Not Found">
                <div class="card-body">
                    <h5 class="card-title">{{$data->name}}</h5>
                    <p class="card-text">{{$data->price}}
                        <i class="bi-cart add"></i>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="carousel__controls">
        <button class="carousel__button" id="prevBtn">&#8249;</button>
        <button class="carousel__button" id="nextBtn">&#8250;</button>
    </div>
</div>


<!--Produits-->
<div class="container-fluid mt-3" id="produit">
    <div class="row title1"><h1>Nos Produits</h1></div><hr>

    <!--Tri-->
    <div class="container-fluid">
        <li class="nav-item dropdown down">
            <a class="dropdown-toggle body sort" data-bs-toggle="dropdown">Prices</a>
            <ol class="dropdown-menu">
                <a class="dropdown-item body" href="{{url('/tri')}}">moins de 1000frs</a>
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

                @foreach($product as $data)
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-3 mt-3">
                    <div class="card carte">
                        <img src="{{'img/'.$data->image}}" class="card-img-top" alt="Not Found">
                        <div class="card-body">
                            <h5 class="card-title">{{$data->name}}</h5>
                            <p class="card-text">{{$data->price}}
                                <i class="bi-cart add"></i>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

        </div>
    </div>
</div>
    <div class="d-flex justify-content-center">
        {{$product->links()}}
    </div>
<div class="container-fluid body mt-3" id="footer">
    Copyright Group 1 X2026
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<script>
    const carouselWrapper = document.querySelector('.carousel__wrapper');
    const prevBtn = document.querySelector('#prevBtn');
    const nextBtn = document.querySelector('#nextBtn');
    const carouselWidth = document.querySelector('.carousel').offsetWidth;
    const itemWidth = document.querySelector('.carousel__item').offsetWidth;
    let currentPosition = 0;

    function slideTo(position) {
        gsap.to(carouselWrapper, {
            x: -position * itemWidth,
            duration: 0.3,
            ease: 'power1.inOut'
        });
    }

    function slideNext() {
        currentPosition++;
        if (currentPosition > (carouselWrapper.children.length - 1) / 3) {
            currentPosition = 0;
        }
        slideTo(currentPosition);
    }

    function slidePrev() {
        currentPosition--;
        if (currentPosition < 0) {
            currentPosition = (carouselWrapper.children.length - 1) / 3;
        }
        slideTo(currentPosition);
    }

    prevBtn.addEventListener('click', slidePrev);
    nextBtn.addEventListener('click', slideNext);

    // Slide automatique toutes les 5 secondes
    setInterval(slideNext, 5000);
</script>
@endsection
