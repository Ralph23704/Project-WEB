<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/AddProduct', function () {
    return view('ShopAddCart');
});

Route::get('/newActivity', function () {
    return view('AddArticle');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('log.login');
});
Route::get('/register', function () {
    return view('log.register');
});
Route::get('/shop',[\App\Http\Controllers\ProductController::class,'index']);
Route::post('/Inscription',[\App\Http\Controllers\RegisterController::class,'Inscription']);
Route::post('/Connexion',[\App\Http\Controllers\LoginController::class,'Connexion']);
Route::get('/shopOffline',[\App\Http\Controllers\OfflineShopController::class,'index']);

//Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tri', [App\Http\Controllers\ProductController::class, 'renderWithPrice']);

