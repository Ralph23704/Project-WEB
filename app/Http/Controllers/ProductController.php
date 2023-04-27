<?php

namespace App\Http\Controllers;

use App\Models\data;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Pagination\Paginator;
use Illuminate\View\View;


class ProductController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * @throws GuzzleException
     */

    public function index(): View
    {
        $url = 'http://localhost:4000/product';
        $product= (new \App\Models\data)->getData($url);

        $perPage= 5;
        //$items = $product->splice(($page-1)*$perPage);
        $products = new Paginator($product,$perPage);
        $products->withPath('/shop');
        return view('Shop',['product'=>$products]);
    }

    public function renderWithPrice(){
        $url = 'http://localhost:4000/product';
        $product= (new \App\Models\data)->getData($url);

        $filtered = collect($product)->where('quantity','=',1);
        $use = $filtered->all();

        return view('Shop',['product'=>$use]);
    }
}
