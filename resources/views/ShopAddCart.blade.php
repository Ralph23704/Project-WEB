@extends('layouts.app')
@section('content')
    @vite(['resources/css/AddCart.css','resources/js/AddCart.js'])
    <body>
    <main>
        <section id="image-details">
            <div id="image-info">
                <div id="image-info1">
                    <img src="{{'img/'.request()->get('image')}}" alt="Image 1" style="width:100%; height:100%;">
                </div>
            </div>
        </section>
        <section id="product-details" style="flex-basis: 50%;">
            <form>
                <div id="product-info">
                    <h2 id="product-name">{{request()->get('name')}}</h2>
                    <p id="product-description">{{request()->get('description')}}</p>
                    <div id="product-price">
                        <p>Prix : <span id="price">{{request()->get('price')}}</span></p>
                        <div id="quantity">
                            <p>Quantité : <span id="quantity-left">10</span></p>
                            <button id="decrease-quantity">-</button>
                            <span id="product-quantity">1</span>
                            <button id="increase-quantity">+</button>
                        </div>
                    </div>
                    <button id="add-to-cart" href="{{url('/addCart?name='.request()->get('name').'&quantity=10')}}" type="submit">Add to cart</button>
                    <button id="buy-now">Buy now</button>
            </form>
            </div>
        </section>
    </main>
    </body>
@endsection
