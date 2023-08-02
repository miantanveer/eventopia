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
    return view('content.landing-page');
});
Route::get('/signup', function () {
    return view('content.auth.signup');
});
Route::get('/login', function () {
    return view('content.auth.login');
});
Route::get('/forget-password', function () {
    return view('content.auth.forget-password');
});
Route::get('/forget-password-1', function () {
    return view('content.auth.forget-password-1');
});
Route::get('/reset-password', function () {
    return view('content.auth.reset-password');
});
Route::get('/verify-code', function () {
    return view('content.auth.verify-code');
});
Route::get('/verify-code-1', function () {
    return view('content.auth.verify-code-1');
});
Route::get('/edit-profile', function () {
    return view('content.edit-profile');
});
Route::get('/customer-dashboard', function () {
    return view('content.customer.customer-dashboard');
});
Route::get('/notify-list', function () {
    return view('layouts.components.notify-list');
});
Route::get('/search-results', function () {
    return view('content.customer.search-results');
});
Route::get('/talent-&-entertainments', function () {
    return view('content.customer.search-results-of-talent&entertainment');
});
Route::get('/services', function () {
    return view('content.customer.services');
});
Route::get('/space-details', function () {
    return view('content.customer.space-detail');
});
Route::get('/service-details', function () {
    return view('content.customer.service-detail');
});
Route::get('/checkout', function () {
    return view('layouts.components.checkout-page');
});
Route::get('/review-pay', function () {
    return view('layouts.components.review');
});
Route::get('/payment-successfull', function () {
    return view('layouts.components.payment-successfull');
});
Route::get('/bookings', function () {
    return view('layouts.components.bookings-sample');
});
Route::get('/booking', function () {
    return view('layouts.components.booking');
});

// Seller side

Route::get('/seller/dashboard', function () {
    return view('content.seller.dashboard');
});
Route::get('/add-space', function () {
    return view('content.seller.add-space');
});
Route::get('/list-space', function () {
    return view('content.seller.list-space');
});
Route::get('/space-form-steps', function () {
    return view('content.seller.space-form-steps');
});
Route::get('/list-entertainment', function () {
    return view('content.seller.list-entertainment');
});
Route::get('/entertainment-form-steps', function () {
    return view('content.seller.entertainment-form-steps');
});
Route::get('/list-service', function () {
    return view('content.seller.list-service');
});
Route::get('/service-form-steps', function () {
    return view('content.seller.service-form-steps');
});
Route::get('/steps-form-submit', function () {
    return view('content.seller.steps-form-submit');
});
Route::get('/my-listings', function () {
    return view('content.seller.my-listing');
});
Route::get('/pending-bookings', function () {
    return view('content.seller.pending-bookings');
});
Route::get('/create-quote', function () {
    return view('content.seller.create-quote');
});
Route::get('/payments', function () {
    return view('content.seller.payments');
});
Route::get('/calendar', function () {
    return view('content.seller.calendar');
});
Route::get('/operating-hours', function () {
    return view('content.seller.operating-hours');
});
// Route::get('/seller-profile', function () {
//     return view('layouts.seller.seller-profile');
// });
// Route::get('/seller-profile-verified', function () {
//     return view('layouts.seller.seller-profile-verified');
// });
