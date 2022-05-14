<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/header', function () {
    return view('layouts/header');
});
Route::get('/footer', function () {
    return view('layouts/footer');
});
Route::get('/landingpage', function () {
    return view('landingpage');
});
Route::get('/cart', function () {
    return view('shoppingcart');
});
Route::get('/register', function () {
    return view('form.registerform');
});
Route::get('/header2',function(){
    return view('layouts/header2');
});
Route::get('/footer2',function(){
    return view('layouts/footer2');
});
Route::get('/about',function(){
    return view('about');
});

Route::get('/login',[LoginController::class, 'getLoginform']);
Route::post('/login',[LoginController::class, 'postLoginform']);

route::get('/product', function(){
    return view('product');
});

Route::get('/admin',[AdminController::class,'LoginSuccess']);
Route::get('/feedback',[AdminController::class,'FeedbackPage']);
Route::get('/customer',[AdminController::class,'CustomerPage']);
Route::get('/lastestorder',[AdminController::class,'LatestOrderPage']);
Route::get('/controller',[AdminController::class,'ControllerPage']);

