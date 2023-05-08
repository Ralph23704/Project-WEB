<?php

namespace App\Http\Controllers;

use App\Models\data;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\View\View;

class OfflineShopController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * @throws GuzzleException
     */

    public function index(): View
    {
        $url = 'http://localhost:3000/product';
        $product = (new \App\Models\data)->getData($url);
        return view('shopOffline', ['product' => $product]);
    }
}
