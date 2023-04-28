<?php

namespace App\Http\Controllers;
use App;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Cookie;

class LoginController
{
    /**
     * @throws GuzzleException
     */
    public function Connexion(\Illuminate\Http\Request $request)
    {
        $userData = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $response = (new App\Models\BDEUser)->signUp($userData);

        if ($response[0] == 'success') {
            $cookie = cookie('user',json_encode($response[1]),3600);
            return redirect(App\Providers\RouteServiceProvider::HOME)->withCookie($cookie);
        } else {
            return back()->withInput()->withErrors($response == 'FAIL'); //repars dans la page avec une erreur
        }
    }

    public function logout()
    {
        //Cookie::forget('user');
        Cookie::expire('user');
        return redirect('/contact');
    }
}

//Ajouter la gestion des tokens
