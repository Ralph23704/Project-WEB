@extends('layouts.app')
@section('content')
    @vite(['resources/css/AddCart.css','resources/js/AddCart.js'])
    <body>
    <main>
        <section id="image-details">
            <div id="image-info">
                <div id="image-info1">
                    <img src="{{asset('img/goodie.jpg')}}" alt="Image 1" style="width:100%; height:100%;">
                </div>
                <div id="image-info2">
                    <img src="{{asset('img/goodie.jpg')}}" alt="Image 2" id="image-info2a">
                    <img src="{{asset('img/goodie.jpg')}}" alt="Image 3" id="image-info2b">
                </div>
            </div>
        </section>
        <section id="product-details" style="flex-basis: 50%;">
            <div id="product-info">
                <h2 id="product-name">Nom du produit</h2>
                <p id="product-description">Description du produit</p>
                <div id="product-price">
                    <p>Prix : <span id="price">10 000 FCFA</span></p>
                    <div id="quantity">
                        <p>Quantité : <span id="quantity-left">10</span></p>
                        <button id="decrease-quantity">-</button>
                        <span id="product-quantity">1</span>
                        <button id="increase-quantity">+</button>
                    </div>
                </div>
                <button id="add-to-cart">Add to cart</button>
                <button id="buy-now">Buy now</button>
            </div>
        </section>
    </main>
    </body>
@endsection
