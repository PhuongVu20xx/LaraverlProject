<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\ProductController as Product;
use App\Http\Controllers\CategoryController as Category;

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
Route::get('/neaoedhelp',[Home::class,'needhelp']);

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
Route::get('/home',[AdminController::class,'AdminControllerPage'])->name('adminhome');
Route::get('/admin',[AdminController::class,'LoginSuccess']);
Route::get('/feedback',[AdminController::class,'FeedbackPage']);
Route::get('/customer',[AdminController::class,'CustomerPage']);
Route::get('/lastestorder',[AdminController::class,'LatestOrderPage']);

Route::get('/adminproduct',[Product::class,'ProductPage']);
Route::get('/editproduct',[Product::class,'EditProduct']);
Route::get('/addproduct',[Product::class,'AddProduct']);
Route::post('/addproduct',[Product::class,'SubmitProduct']);
Route::get('/allproduct',[Product::class,'AllProduct']);


Route::get('/importstock',[Product::class,'ShowImportStock']);
Route::post('/importstock',[Product::class,'ImportStock']);
Route::post('/editstock',[Product::class,'EditStock']);

Route::post('/importproduct',[RegisterController::class, 'ImportProductInput']);

Route::get('/category',[AdminController::class,'CategoryPage'])->name('category');
Route::get('/addcategory',[Category::class,'ShowCategory']);
Route::post('/addcategory',[Category::class, 'AddNewCategory']);
Route::post('/addcategory',[Category::class, 'ChangeCategoryStatus']);
Route::get('/allcategory',[Category::class,'ShowAllCategory']);
Route::get('/editcategory',[Category::class,'EditCategory']);


