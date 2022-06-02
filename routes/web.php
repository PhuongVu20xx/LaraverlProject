<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\ProductController as Product;
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
// LANDINGPAGE
Route::get('/header', function () {
    return view('layouts/header');
});
Route::get('/footer', function () {
    return view('layouts/footer');
});
Route::get('/', [Home::class,'landingpage'])->name('landingpage');
Route::get('/about',[Home::class,'about']);
Route::get('/contact',[Home::class,'contact']);
Route::get('/shipping',[Home::class,'shipping']);
Route::get('/needhelp',[Home::class,'needhelp']);

// PRODUCT
Route::get('/product',[Product::class,'product']);
Route::get('/product/sweet-grocery',[Product::class,'product_sweetgrocery']);

// CART
Route::get('/cart', function () {
    return view('pages/cart');
});

// BLOG
Route::get('/blog',[Home::class,'blog']);
Route::get('/blogmin', function(){
    return view(('pages/blogmin'));
});


// PROFILE
Route::get('/profile',[ProfileController::class, 'getProfileForm']);
Route::post('/profile',[ProfileController::class, 'postProfileForm']);
Route::post('/changepwd',[ProfileController::class, 'postNewPassword']);


// LOGIN
Route::get('/login',[LoginController::class, 'getLoginform']);
Route::post('/login',[LoginController::class, 'postLoginform']);
// REGISTER
Route::get('/register',[RegisterController::class, 'getRegisterform']);
Route::post('/register',[RegisterController::class, 'postRegisterform']);

// ADMIN
Route::get('/admin',[AdminController::class,'LoginSuccess']);
Route::get('/feedback',[AdminController::class,'FeedbackPage']);
Route::get('/customer',[AdminController::class,'CustomerPage']);
Route::get('/lastestorder',[AdminController::class,'LatestOrderPage']);
Route::get('/controller',[AdminController::class,'ControllerPage'])->name('controller');
Route::get('/editproduct',[AdminController::class,'EditProduct']);
Route::get('/addproduct',[AdminController::class,'AddProduct']);
Route::get('/allproduct',[AdminController::class,'AllProduct']);
Route::get('/addcategory',[AdminController::class,'AddCategory']);
Route::get('/importproduct',[AdminController::class,'ImportProduct']);

Route::post('/importproduct',[RegisterController::class, 'ImportProductInput']);
Route::post('/addcategory',[AdminController::class, 'AddNewCategory']);


