<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\SearchController;
// use App\Http\Controllers\DB;
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
    return view('pages/landingpage');
});
Route::get('/cart', function () {
    return view('pages/cart');
});
Route::get('/about',function(){
    return view('pages/about');
});
Route::get('/contact',function(){
    return view('pages/contact');
});
Route::get('/needhelp',function(){
    return view('pages/needhelp');
});
Route::get('/shipping',function(){
    return view('pages/shipping');
});
Route::get('/blog',function(){
    return view('pages/blog');
});
Route::get('/blogmin', function(){
    return view(('pages/blogmin'));
});
Route::get('/sidebar', function(){
    return view('layouts/sidebar');
});


Route::get('/product',function(){
    return view('pages.product');
});
Route::post('/product', [SearchController::class,'index']);


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
Route::get('/addproduct',[AdminController::class,'AddProduct']);
Route::get('/allproduct',[AdminController::class,'AllProduct']);
Route::get('/addcategory',[AdminController::class,'AddCategory']);
Route::get('/importproduct',[AdminController::class,'ImportProduct']);

Route::post('/importproduct',[RegisterController::class, 'ImportProductInput']);
Route::post('/addcategory',[RegisterController::class, 'ImportProductInput']);


