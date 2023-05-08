<?php

namespace App\Http\Controllers;

use App\Models\data;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\View\View;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;


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
        $url = 'http://localhost:3000/product';
        $product= (new \App\Models\data)->getData($url);
        return view('Shop',['product'=>$product]);
    }
    public function search(Request $request){
        $search=$request->input('search');
        $url = 'http://localhost:3000/product';
        $product= collect((new \App\Models\data)->getData($url));
        $sorted = $product->where('name','like','$search%');
        return \view('shop',['product'=>$sorted]);
    }

    public function sort(){
        $url = 'http://localhost:3000/product';
        $product= collect((new \App\Models\data)->getData($url));
        $sorted = $product->sortBy('name');
        return \view('shop',['product'=>$sorted]);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function addCart(){
        $url = 'http://localhost:3000/basket';
        $userData = [
            'user_id' => request()->cookie('user')->name,
            'product_id' => \request()->get('name'),
            'quantity' => \request()->get('quantity')
        ];
        $result =(new \App\Models\data)->sendData($url,$userData);
        return $result->json();
    }

    /**
     * @throws GuzzleException
     */
    public function DisplayCard(){
        $url = 'http://localhost:3000/basket';
        $data =(new \App\Models\data)->getData($url);
        $cart=[];
        foreach ($data as $i){
            if ($i->email==request()->cookie('user')){
                $cart=$i;
            }
        }
        return \view('cart',['name'=>$cart->name,'image'=>$cart->image,'price'=>$cart->price_FCFA,'description'=>$cart->description,'item'=>$cart]);

    }

    public function renderWithPrice(){
        $url = 'http://localhost:3000/product';
        $product= (new \App\Models\data)->getData($url);

        $filtered = collect($product)->where('quantity','=',1);
        $use = $filtered->all();

        return view('Shop',['product'=>$use]);
    }
}
