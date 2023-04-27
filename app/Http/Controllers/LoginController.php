<?php

namespace App\Http\Controllers;
use App;

class LoginController
{
    public function Connexion(\Illuminate\Http\Request $request)
    {
        $userData = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $response = (new App\Models\BDEUser)->signUp($userData);

        if ($response == 'success') {
            return redirect('/shop');
        } else {
            return back()->withInput()->withErrors($response == 'FAIL'); //repars dans la page avec une erreur
        }
    }
}

//Ajouter la gestion des tokens
