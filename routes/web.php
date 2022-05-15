<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('cart');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/blog',function(){
    return view('blog');
});
Route::get('/product', function(){
    return view('product');
});


// Login
Route::get('/login',[LoginController::class, 'getLoginform']);
Route::post('/login',[LoginController::class, 'postLoginform']);
// Register
Route::get('/register',[RegisterController::class, 'getRegisterform']);
Route::post('/register',[RegisterController::class, 'postRegisterform']);


Route::get('/admin',[AdminController::class,'LoginSuccess']);
Route::get('/feedback',[AdminController::class,'FeedbackPage']);
Route::get('/customer',[AdminController::class,'CustomerPage']);
Route::get('/lastestorder',[AdminController::class,'LatestOrderPage']);
Route::get('/controller',[AdminController::class,'ControllerPage']);
Route::get('/editproduct',[AdminController::class,'EditProduct']);
Route::get('/addproduct',[AdminController::class,'AddCategory']);
Route::get('/allproduct',[AdminController::class,'AllProduct']);
Route::get('/addcategory',[AdminController::class,'AddProduct']);
Route::get('/importproduct',[AdminController::class,'ImportProduct']);

Route::post('/importproduct',[RegisterController::class, 'ImportProductInput']);

