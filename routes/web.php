<?php

use App\Http\Controllers\MailBDEController;
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


/*Not connected*/
Route::get('/', function () {return view('welcome');});
Route::get('/shopOffline',[\App\Http\Controllers\OfflineShopController::class,'index']);
Route::get('/contact', function () {
    return view('contact');
});


/*Authentication, Privacy Policy*/
Route::get('/login', function () {
    return view('log.login');
});
Route::get('/register', function () {
    return view('log.register');
});
Route::post('/Inscription',[\App\Http\Controllers\RegisterController::class,'Inscription']);
Route::post('/Connexion',[\App\Http\Controllers\LoginController::class,'Connexion']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout',[\App\Http\Controllers\LoginController::class,'logout']);


/*CESI*/


/*Send Mail*/
Route::get('send-mail', [MailBDEController::class, 'index']);
Route::post('send-mail', [MailBDEController::class, 'send']);



/*Admin*/
Route::get('/admin',[\App\Http\Controllers\AdminController::class,'index']);


/*BDE Members*/


/*Blog*/
Route::get('/newActivity', function () {
    return view('AddArticle');
});


/*Shop*/
Route::get('/shop',[\App\Http\Controllers\ProductController::class,'index']);
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/AddProduct', function () {
    return view('ShopAddCart');
});
Route::get('/tri', [App\Http\Controllers\ProductController::class, 'renderWithPrice']);









//Auth::routes();






