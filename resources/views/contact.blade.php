
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>


        h1{
            text-align: center;
            color:black;
        }

        form {
            display: flex;
            flex-direction: column;

        }

        label {
            margin-top: 10px;
            margin-bottom: 5px;
        }

        input[type="email"], input[type="text"] {
            padding: 10px;
            border: 1px solid black;
            border-radius: 100px;
        }

        button {
            margin-top: 10px;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: orange;
            color: white;
            font-weight: bold;
        }

        button {
            background-color: rgb(255, 0, 0);
            border: 1px solid #ccc;
            border-radius: 50px;
            padding: 20px 20px;
            width: 200px;
            margin-top: 20px;
        }

        #message{
            height: 70px;
        }

        .contact{
            background: #FFFFFF;
            box-shadow: 4px 4px 4px rgba(0.25, 0.25, 0.25, 0.25);
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container contact">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-3 mt-3" style="background-color: #E09426">
            <h1>Contactez nous</h1>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-8 col-xl-9 col-xxl-9 mt-9">
            <form method="post" action="https://formsubmit.co/akwamou@gmail.com">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                    <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Votre message</label>
                    <textarea class="form-control" placeholder="Exprimez vous" id="message" name="textarea"></textarea>
                </div>
                <button type="submit">Envoyer</button>
            </form>
            <br />
        </div>
    </div>
</div>

</div>
</body>
</html>
@endsection
