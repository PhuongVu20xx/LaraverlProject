<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\ProductController as Product;
use App\Http\Controllers\CategoryController as Category;
use App\Http\Controllers\PaymentController as Payment;
use App\Http\Controllers\OfferController as Offer;

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
Route::get('/product',[Home::class,'product']);
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

// ADMIN PRODUCT
Route::get('/addproduct',[Product::class,'AddProduct']);
Route::post('/addproduct',[Product::class,'SubmitProduct']);
Route::get('/allproduct',[Product::class,'AllProduct']);
Route::get('/editproduct',[Product::class,'EditProduct']);
Route::post('/editproduct',[Product::class,'PostEditProduct']);


Route::get('/importstock',[Product::class,'ShowImportStock']);
Route::post('/importstock',[Product::class,'ImportStock']);
Route::post('/editstock',[Product::class,'EditStock']);
Route::post('/allstock',[Product::class,'AllStock']);


Route::get('/importproduct',[Product::class, 'showImportProduct']);
Route::post('/importproduct',[Product::class, 'postImportProduct']);
Route::post('/editimportproduct',[Product::class, 'Editimportproduct']);

// ADMIN CATEGORY
Route::get('/addcategory',[Category::class, 'ShowAddCategory']);
Route::post('/addcategory',[Category::class, 'AddNewCategory']);

Route::get('/allcategory',[Category::class,'ShowAllCategory']);
Route::post('/allcategory',[Category::class,'RequestEditCategory'])->name('allcategory');
Route::get('/editcategory',[Category::class,'EditCategory']);

// ADMIN PAYMENT
Route::get('/adminpayment',[Payment::class,'ShowAllPayment']);
Route::get('/adminpayment',[Payment::class,'ShowAllPayment']);
Route::post('/addpayment',[Payment::class,'AddPayment']);

// ADMIN OFFER
Route::get('/adminoffer',[Offer::class,'ShowAllOffer']);
Route::get('/addoffer',[Offer::class,'ShowAllOffer']);
Route::post('/addoffer',[Offer::class,'AddOffer']);

Route::get('/adminprofile',[AdminController::class,'showAdminProfile']);
Route::post('/adminprofile',[AdminController::class,'postAdminProfile']);
