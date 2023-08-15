<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Seller\ListingSpaceController;
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

// Authentications
Route::get('signup', [AuthenticationController::class, 'signupIndex'])->name('signup');
Route::post('signup', [AuthenticationController::class, 'signup']);
Route::get('login', [AuthenticationController::class, 'loginIndex'])->name('login');
Route::post('login', [AuthenticationController::class, 'login']);
Route::get('verify-email-phone', [AuthenticationController::class, 'verifyEmailPhoneIndex'])->name('verify-email-phone');
Route::post('verify-email-phone', [AuthenticationController::class, 'verifyEmailPhone']);
Route::get('forget-password', [AuthenticationController::class, 'forgetEmailPhoneIndex'])->name('forget-password');
Route::post('forget-password', [AuthenticationController::class, 'forgetPassword']);
Route::get('reset-password', [AuthenticationController::class, 'resetPasswordIndex'])->name('reset-password');
Route::post('reset-password', [AuthenticationController::class, 'resetPassword']);
Route::post('resend-otp', [AuthenticationController::class, 'sendOtp'])->name('resend-otp');

//Logout
Route::post('logout', [AuthenticationController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add-space', function () {
        return view('content.seller.add-space');
    });
    Route::get('/edit-profile', function () {
        return view('content.edit-profile');
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
    // backend k waqt sab ka prefix /seller/ lgana
    Route::get('/seller-dashboard', function () {
        return view('content.seller.dashboard');
    });
    Route::get('/add-space', function () {
        return view('content.seller.add-space');
    });

    Route::get('list-space', [ListingSpaceController::class, 'listSpace'])->name('list-space');
    Route::get('space-form-steps', [ListingSpaceController::class, 'addSpaceForm'])->name('add-space');
    Route::post('address-step', [ListingSpaceController::class, 'addAddress'])->name('add-address');
    // Route::get('/list-space', function () {
    //     return view('content.seller.list-space');
    // });
    // Route::get('/space-form-steps', function () {
    //     return view('content.seller.space-form-steps');
    // });
    Route::get('/list-entertainment', function () {
        return view('content.seller.list-entertainment');
    });
    Route::get('/add-entertainment', function () {
        return view('content.seller.add-entertainment');
    });
    Route::get('/entertainment-form-steps', function () {
        return view('content.seller.entertainment-form-steps');
    });
    Route::get('/list-service', function () {
        return view('content.seller.list-service');
    });
    Route::get('/add-service', function () {
        return view('content.seller.add-services');
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
});


// Route::get('/seller-profile', function () {
//     return view('layouts.seller.seller-profile');
// });
// Route::get('/seller-profile-verified', function () {
//     return view('layouts.seller.seller-profile-verified');
// });
