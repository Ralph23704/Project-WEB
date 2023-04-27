@extends('layouts.app')

@section('content')
    @vite(['resources/js/app.js'])
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>

<style>
    /* Article */

    p {
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

    article {
        width : 500px ;
        margin : 0px ;
    }

    .article-container {
        width : 1020px ;
        height : 605px ;
        float : left ;
    }

    .espace {
        width : 20px ;
        height : 605px ;
        background-color : #F17F23 ;
        margin-left : 1030px ;
    }

    .background {
        height : 580px ;
        background-image:url(https://www.justgeek.fr/wp-content/uploads/2023/01/mettre-fond-ecran-anime-pc.jpg)

    }
    .scroller {
        width: 1030px;
        height: 605px;
        overflow-y: scroll;
        scrollbar-color: rgb(140, 139, 141) rgb(202, 209, 202);
        scrollbar-width: thin;
    }

    h1 {
        text-align : center ;
    }

    /* Carousel */

    .bouton_officiel {
        margin-left : 500px ;
        border-radius : 50% ;
    }

    .prev {
        left: 0;
    }

    .next {
        right: 0;
    }

    /* Formulaire*/

    .activity p{
        color : black ;
        width : 300px ;

    }

    .formulaire {
        margin : 0px ;
        padding : 0px ;
        float : left ;
    }

    .form{
        margin: 0px ;
        margin-top : 0px ;
        float : right ;
    }

    .formu{
        margin-top: 100px ;
        padding-top : 100px ;
        float : right ;
    }

    /* Aside */

    aside {
        width : 300px ;
        height : 605px ;
        float: right;
        color : grey ;
        background-color : black ;
        text-align : center ;
    }

    .idea_box {
        margin-top : 40px ;
    }

    .activite {
        width : 250px ;
        height : 30px ;
        background-color : white ;
        margin-left : 30px ;
        margin-top : 30px ;

    }

    .activite_connecte {
        width : 250px ;
        height : 30px ;
        background-color : white ;
        margin-left : 30px ;
        margin-top : 30px ;
    }

    .activite_connecte2 {
        width : 250px ;
        height : 30px ;
        background-color : white ;
        margin-left : 30px ;
        margin-top : 10px ;
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
        margin-left : 230px ;
        margin-top : 230px ;
    }

    .add_a_new_activity2 {
        width : 40px ;
        height : 40px ;
        border-radius : 40px ;
        background-color : white ;
        margin-left : 230px ;
        margin-top : 62px ;
    }

    .vote {
        margin-right : 190px ;
        width : 25px ;
        height : 25px ;
        margin-top : 30px ;
    }


</style>



    <aside>
        <div class="idea_box">
            IDEA BOX
        </div>
        <div class="activite">

        </div>
        <div class="activite">

        </div>
        <div class="activite">

        </div>
        <div class="activite">

        </div>
        <div class="add_a_new_activity">
            <a onclick="alert('Not authorized to add a Product')" type="button" class="bi-plus"></a>
        </div>

    </aside>


    <article>
        <div class="article-container">
            <div class="scroller row">
                <div class="main">
                    <div class="background">
                        <p>
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
                </div>

                <h2 id="PastEvent"> Past Event</h2>

            </div>
        </div>
        <div class="espace"></div>
    </article>
@include('layouts.footer')
@endsection
