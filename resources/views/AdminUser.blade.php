@extends('layouts.app')
@section('content')
@vite(['resources/js/app.js'])
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<style>
    .ideaBox{
        width: 64px;
        height: 64px;
    }
    .Event{
        width: 100%;
        height: 100px;
    }
</style>
    <div class="container">
        <table id="dtExample" class="display table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Function</th>
                <th>Change Function</th>
                <th>Delete an user</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $person)
                <tr>
                    <td>{{$person->username}}</td>
                    <td>{{$person->surname}}</td>
                    <td>{{$person->email}}</td>
                    <td>{{$person->functionName}}</td>
                    <td><a type="button" class="btn btn-dark">Change function</a></td>
                    <td><a type="button" class="btn btn-dark">Delete User</a></td>
                </tr>
            @endforeach
            </tbody>
            <!--Boucle pour afficher les utilisateurs-->
        </table>
@endsection
