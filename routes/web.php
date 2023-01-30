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

Route::get('/', function () {
    return view('web.pages.index');
});

Route::get('/shop', function () {
    return view('web.pages.shop');
});

Route::get('/single-shop', function () {
    return view('web.pages.single-shop');
});

Route::get('/about', function () {
    return view('web.pages.about');
});

Route::get('/blog', function () {
    return view('web.pages.blog');
});

Route::get('/single-blog', function () {
    return view('web.pages.single-blog');
});

// ROUTE SHOP
Route::get('/cart', function () {
    return view('web.pages.shop.cart');
});

Route::get('/wishlist', function () {
    return view('web.pages.shop.wishlist');
});

Route::get('/checkout', function () {
    return view('web.pages.shop.checkout');
});

Route::get('/order-tracking', function () {
    return view('web.pages.shop.order-tracking');
});


// ROUTE AKUN
Route::get('/login', function () {
    return view('web.pages.akun.login');
});