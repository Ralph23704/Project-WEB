@extends('layouts.app')
@section('content')
    <style>
        hr{color: #489BBD; height: 5px; line-height: 10px}
    </style>
@vite(['resources/css/footer.css','resources/js/app.js'])
<div class="container-fluid mt-3" id="banner">
    <img src="{{asset('img/goodie.jpg')}}" alt="Not Found"  style="position:relative;width: 100%;height: 150px">
</div>

<!--Les plus commandés-->
<div class="container-fluid mt-3">
    <div class="row title1"><h1>Votre Panier</h1></div><hr>
    @if(isset($item))
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="{{'img/'.$image}}" class="card-img-top" alt="Not Found">
            </div>

            <div class="col-9">
                <h5>{{$name}}</h5>
                <p>{{$description}}
                    <i style="float: right">{{$price}}</i>
                </p>
            </div>
        </div>
    </div>
    @else
        <div class="container">No product Yet</div>
    @endif
</div>

<div class="container-fluid mt-3" id="buy">
    <h5>Prix Total : ...</h5>
    <button style="border-radius: 20px; background-color: #E09426; border-color: #E09426; float: right;">Buy Now</button>
</div>

<div class="container-fluid body mt-3" id="footer">
    Copyright Group 1 X2026
</div>
@endsection
