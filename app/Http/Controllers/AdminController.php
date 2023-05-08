<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;

class AdminController
{
    public function index(\Illuminate\Http\Request $request): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $url = 'http://localhost:3000/users/admin';
        $users= (new \App\Models\data)->getData($url);

        return view('AdminUser',['users'=>$users]);
    }

    public function indexHome(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $url = 'http://localhost:3000/events';
        $events= (new \App\Models\data)->getData($url);

        $url2 = 'http://localhost:3000/activity';
        $activity= (new \App\Models\data)->getData($url2);

        return view('home',['events'=>$events],['activity'=>$activity]);
    }

    public function indexNotConnected(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $url = 'http://localhost:3000/events';
        $events= (new \App\Models\data)->getData($url);

        $url2 = 'http://localhost:3000/activity';
        $activity= (new \App\Models\data)->getData($url2);

        return view('home',['events'=>$events],['activity'=>$activity]);
    }
}
