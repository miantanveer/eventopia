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
Route::get('/talent-&-entertainments', function () {
    return view('layouts.customer.search-results-of-talent&entertainment');
});
Route::get('/services', function () {
    return view('layouts.customer.services');
});
Route::get('/space-details', function () {
    return view('layouts.space.space-detail');
});
Route::get('/service-details', function () {
    return view('layouts.customer.service-detail');
});
Route::get('/checkout', function () {
    return view('layouts.space.checkout-page');
});
Route::get('/review-pay', function () {
    return view('layouts.space.review');
});
Route::get('/payment-successfull', function () {
    return view('layouts.space.payment-successfull');
});
Route::get('/booking', function () {
    return view('layouts.users.booking');
});
Route::get('/bookings', function () {
    return view('layouts.users.bookings-sample');
});

// Seller side

Route::get('/seller-dashboard', function () {
    return view('layouts.seller.dashboard');
});
Route::get('/add-space', function () {
    return view('layouts.seller.add-space');
});
Route::get('/add-space-steps', function () {
    return view('layouts.seller.add-space-steps');
});
Route::get('/list-entertainment', function () {
    return view('layouts.seller.list-entertainment');
});
Route::get('/entertainment-list-steps', function () {
    return view('layouts.seller.entertainment-list-steps');
});
Route::get('/my-listings', function () {
    return view('layouts.seller.my-listing');
});
Route::get('/pending-bookings', function () {
    return view('layouts.seller.pending-bookings');
});
Route::get('/create-quote', function () {
    return view('layouts.seller.create-quote');
});
Route::get('/payments', function () {
    return view('layouts.seller.payments');
});
Route::get('/calendar', function () {
    return view('layouts.seller.calendar-content');
});
Route::get('/operating-hours', function () {
    return view('layouts.seller.operating-hours');
});
Route::get('/seller-profile', function () {
    return view('layouts.seller.seller-profile');
});
Route::get('/seller-profile-verified', function () {
    return view('layouts.seller.seller-profile-verified');
});