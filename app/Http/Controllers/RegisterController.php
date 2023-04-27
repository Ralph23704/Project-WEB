<?php

namespace App\Http\Controllers;
use App;

class RegisterController
{
    public function Inscription(\Illuminate\Http\Request $request)
    {
        if ($request->input('localisation') == 'douala') {

            $userData = [
                'function' => 'Salariés CESI',
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'localisation' => $request->input('localisation'),
            ];

            $response = (new App\Models\BDEUser)->signIn($userData);

            if ($response == 'user created successfully') {
                return redirect('/login');
            } else {
                return back()->withInput()->withErrors($response == 'FAIL'); //repars dans la page avec une erreur
            }
        } else {
            return view('welcome'); //mettre une page de redirection pour s'il n'est pas du site de Douala
        }
    }
}

//Ajouter la gestion des tokens et les sessions
