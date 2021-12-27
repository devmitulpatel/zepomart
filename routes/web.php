<?php

use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;

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
//
//Route::get('/', function () {
//    return view('welcome');
//});


Route::view('/','pages.home')->name('home');
Route::view('/contact-us','pages.contact-us')->name('contact-us');
Route::view('/about-us','pages.about-us')->name('about-us');
Route::view('/blog','pages.about-us')->name('blog');

Route::get('/page/{slug?}',[StaticPageController::class,'defaultFallback']);
