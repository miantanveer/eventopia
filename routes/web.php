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
    return view('layouts.landing-page.landing-page-layout');
});
Route::get('/signup', function () {
    return view('layouts.auth.signup');
});
Route::get('/login', function () {
    return view('layouts.auth.login');
});
Route::get('/forget-password', function () {
    return view('layouts.auth.forget-password');
});
Route::get('/forget-password-1', function () {
    return view('layouts.auth.forget-password-1');
});
Route::get('/reset-password', function () {
    return view('layouts.auth.reset-password');
});
Route::get('/verify-code', function () {
    return view('layouts.auth.verify-code');
});
Route::get('/verify-code-1', function () {
    return view('layouts.auth.verify-code-1');
});
Route::get('/edit-profile', function () {
    return view('layouts.users.edit-profile');
});
Route::get('/dashboard', function () {
    return view('layouts.customer.index');
});
Route::get('/login', function () {
    return view('layouts.auth.login');
});

Route::get('/search-results', function () {
    return view('layouts.customer.search-results');
});
Route::get('/space-details', function () {
    return view('layouts.space.space-detail');
});
Route::get('/checkout', function () {
    return view('layouts.space.checkout-page');
});
Route::get('/review-pay', function () {
    return view('layouts.space.review');
});

Route::get('/add-space', function () {
    return view('layouts.seller.add-space');
});




