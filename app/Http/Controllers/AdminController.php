<?php

namespace App\Http\Controllers;

class AdminController
{
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $url = 'http://localhost:4000/users';
        $users= (new \App\Models\data)->getData($url);

        return view('welcome',['users'=>$users]);
    }
}
