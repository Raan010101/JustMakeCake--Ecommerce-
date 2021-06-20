<?php

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

Route::get('/', 'IndexPageController@index')->name('index');



Route::get('/single-product', 'IndexPageController@singelProducts')->name('single-products');

Route::get('/about', function () {
    return view('about');
});

Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/my-account', function () {
    return view('my-account');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/shop-grid', function () {
    return view('shop-grid');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::get('/team', function () {
    return view('team');
});