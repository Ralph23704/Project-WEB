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
Route::get('/',[\App\Http\Controllers\AdminController::class,'indexNotConnected']);
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

Route::get('/home', [\App\Http\Controllers\AdminController::class,'indexHome'])->name('home');

Route::post('/logout',[\App\Http\Controllers\LoginController::class,'logout']);
Route::get('/ml',function(){return view('LegalMention');});


/*CESI*/


/*Send Mail*/
Route::get('send-mail', [MailBDEController::class, 'index']);
Route::post('send-mail', [MailBDEController::class, 'send']);



/*Admin*/
Route::get('/admin',function (){return view('log.loginAdmin');});
Route::post('/logAdmin',[\App\Http\Controllers\LoginController::class,'ConnexionAdmin']);
Route::get('/viewAdmin',[\App\Http\Controllers\AdminController::class,'index']);


/*BDE Members*/


/*Blog*/
Route::get('/newActivity', function () {
    return view('AddArticle');
});


/*Shop*/
Route::get('/shop',[\App\Http\Controllers\ProductController::class,'index']);
Route::get('/cart', [App\Http\Controllers\ProductController::class, 'DisplayCard']);
Route::get('/AddProduct', function () {
    return view('ShopAddCart');
});
Route::get('/search', [App\Http\Controllers\ProductController::class, 'search']);
Route::get('/sort', [App\Http\Controllers\ProductController::class, 'sort']);
Route::get('/addCart', [App\Http\Controllers\ProductController::class, 'addCart']);
Route::get('/addProduct', function (){return view('ShopAddCart');});









//Auth::routes();






