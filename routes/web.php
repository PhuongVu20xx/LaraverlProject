<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControler;


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
Route::get('/register', function(){
    return view('form.registerform');
});
Route::get('/admin/{email?}',[AdminControler::class,'LoginSuccess']);


