@extends('layouts.app')

@section('content')
    @vite(['resources/js/app.js'])
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>

<style>

    /* Article */

    #first {
        color : white ;
        font-size : 40px ;
        margin-left : 180px ;
        padding-top : 170px ;
        height : 400px ;
        width : 400px ;
        text-align : left;
    }

    .barre-p {
        background-color : #CF983C;
        width : 480px ;
        height : 8px ;
        margin-left : 180px ;
        margin-top : 0px ;
    }
    .scroller {
        width: 1030px;
        height: 605px;
        overflow-y: scroll;
        scrollbar-color: rgb(140, 139, 141) rgb(202, 209, 202);
        scrollbar-width: thin;
    }

    .espace {
        width : 10px ;
        background-color : #F17F23 ;
    }

    .background {
        height : 580px ;
        background-image:url(https://www.justgeek.fr/wp-content/uploads/2023/01/mettre-fond-ecran-anime-pc.jpg)

    }

    h1 {
        text-align : center ;
    }

    /* IdeaBox */

    .idea_box {
        margin-top : 40px ;
        color: white;
        font-size: x-large;
    }

    .activite {
        background-color : white ;
        margin-top: 10px;
        margin-bottom: 10px;
        width: 100%;

    }

    span {
        width : 40px ;
        height : 40px ;
        color : black ;
        font-size : 25px ;
        margin-top : 0px ;
        font-weight : 900 ;
    }

    .add_a_new_activity {
        width : 40px ;
        height : 40px ;
        border-radius : 40px ;
        background-color : white ;
    }
     .ideaBox{
         width: 64px;
         height: 64px;
     }
    .Event{
        width: 100%;
        height: 100px;
    }

</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-9 scroller">
            <div class="background">
                <p id="first">
                    NOW,YOUR<br>
                    BDE IS<br>
                    AVALAIBLE<br>
                    EVEN ONLINE
                </p>
                <div class="barre-p">

                </div>
            </div>

            <h1 class="mt-3">EVENTS</h1>
            <div class="container-fluid mt-3 mb-3" id="carousel">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/logo_bde.jpg" class="d-block w-100 h-100" alt="Not found...">
                        </div>

                        <div class="carousel-item">
                            <img src="images/chat.jpg" class="d-block w-100 h-100" alt="Not found...">
                        </div>

                        <div class="carousel-item">
                            <img src="images/logo_bde.jpg" class="d-block w-100 h-100" alt="Not found...">
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

            <h2 id="PastEvent"> Past Event</h2>
            <div class="row">
                @foreach($events as $event)
                <div class="thumbnail mt-3">
                    <img src="{{'img/'.$event->image}}" alt="..." class="Event" width="50%">
                    <div class="caption">
                        <h3>{{$event->name}}</h3>
                        <p>{{$event->description}}</p>
                        <p>{{$event->dates}}</p>
                        <p> <form class="form-inline row" method="POST" action="" style="float:left;width: 70%; justify-content: space-between">
                            <label for="exampleInputEmail1"></label>
                            <input type="text" class="form-control col-sm-10" id="exampleInputEmail1" placeholder="Enter a comment">
                            <a type="submit" style="float: right" class="col-sm-2"><i class="bi-send" onclick="alert('Not Authorized to comment')"></i></a>
                        </form>
                        <a href="#" class="btn btn-primary" role="button" style="float: right;"><i class="bi-heart"></i>{{$event->votes}}</a>
                        <a href="#" class="btn btn-primary" role="button" style="float: right;"><i class="bi-chat-dots" onclick="alert('Not Authorized to view comments')"></i></a>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-3" style="background-color: black; justify-content: center">
            <div class="idea_box">
                IDEA BOX <i class="bi bi-emoji-smile-upside-down-fill" style="color: white"></i>
            </div>
            <!--Boite à idée-->
            <ul class="list-unstyled">
                @foreach($activity as $act)
                    <li class="media activite" style="border-radius: 5px">
                        <img class="mr-3 ideaBox" src="{{'img/'.$act->image}}" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">{{$act->name}}</h5>
                            {{$act->description}}
                            <a href="#" class="btn btn-primary" role="button" style="float: right;"><i class="bi-heart" onclick="alert('Not Authorized to like')"></i>{{$act->votes}}</a>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="add_a_new_activity" style=" float: right; justify-content: center">
                <a onclick="alert('Not authorized to add a Product')" type="button" class="bi-plus" style="text-align: center"></a>
            </div>
            <div class="espace" style="background-color: #F17F23"></div>
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection
