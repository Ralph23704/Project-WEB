@extends('layouts.app')
@section('content')
    <div>
        <table id="dtExample" class="display">
            <thead>
                <tr>
                    <th>Nom Manif</th>
                    <th>Date</th>
                    <th>Nombre d'inscrits</th>
                    <th>Liste des incrits (fichier)</th>
                </tr>
            </thead>
            <!--Boucle pour afficher les manifestations-->
            <tbody>
            @foreach($users as $person)
                <tr>
                    <td><img src="{{$person->username}}"></td>
                    <td>{{$person->date}}</td>
                    <td>{{$person->number}}</td>
                    <td>{{$person->file}}</td>
                    <td><a type="button" class="btn btn-dark" onclick="uploads('{{$person->name}}')">Upload File</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

<script>
    function uploads(){

    }
</script>
@endsection
