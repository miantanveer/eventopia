<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\QuoteController;
use App\Http\Controllers\Api\Customer\DashboardController;
use App\Http\Controllers\Api\Customer\ListingController;
use App\Http\Controllers\Api\Customer\CartController;
use App\Http\Controllers\Api\Customer\OrderController;
use App\Http\Controllers\Api\Customer\PaymentController;
use App\Http\Controllers\Api\Customer\BookingController;
use App\Http\Controllers\Api\Seller\BookingController as SellerBookingController;
use App\Http\Controllers\Api\Seller\OrderController as SellerOrderController;
use App\Http\Controllers\Api\Seller\SpaceController;
use App\Http\Controllers\Api\Seller\EntertainmentController;
use App\Http\Controllers\Api\Seller\ServiceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('signup', [AuthenticationController::class, 'signup']);
Route::post('verify-otp', [AuthenticationController::class, 'verifyOtp']);
Route::post('forget-password', [AuthenticationController::class, 'forgetPassword']);
Route::post('reset-password', [AuthenticationController::class, 'resetPassword']);
Route::post('login', [AuthenticationController::class, 'login']);
Route::post('logout', [AuthenticationController::class, 'logout']);


Route::prefix('customer')->middleware('auth:sanctum')->group(function(){

    Route::post('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::post('/editProfile', [DashboardController::class, 'editProfile']);
    Route::get('/notifications', [NotificationController::class, 'index']);

    Route::prefix('listings')->group(function(){
        Route::get('/', [ListingController::class, 'index']);
        Route::get('/index/{type}', [ListingController::class, 'listing_index']);
        Route::get('/{type}', [ListingController::class, 'listing']);
        Route::post('/filter/{type}', [ListingController::class, 'filter']);
        Route::get('/details/{id}/{type}', [ListingController::class, 'listingDetail']);

    });

    Route::prefix('cart')->group(function(){
        Route::get('/', [CartController::class, 'checkoutData']);
        Route::post('/{id}/{type}', [CartController::class, 'checkout']);
        Route::delete('/delete/{id}/{type}', [CartController::class, 'destroy']);

    });

    Route::prefix('order')->group(function(){
        Route::post('/', [OrderController::class, 'review']);

    });

    Route::prefix('payment')->group(function(){
        Route::post('/', [PaymentController::class, 'store']);

    });

    Route::prefix('quote')->group(function(){
        Route::post('/send/{id}', [QuoteController::class, 'send_quote']);
        Route::post('/receive/{id}', [QuoteController::class, 'receive_quote']);
        Route::post('/load/{id}', [QuoteController::class, 'load_quote']);
        Route::post('/accept/{id}', [QuoteController::class, 'accept_quote']);

    });

    Route::prefix('booking')->group(function(){
        Route::get('{type}', [BookingController::class, 'index']);
        Route::get('get/{type}', [BookingController::class, 'bookings']);
        Route::post('pending', [BookingController::class, 'pending']);
        Route::post('accept/{id}', [BookingController::class, 'accept']);
        Route::post('cancel/{id}', [BookingController::class, 'cancelBooking']);
        Route::post('refund/{id}/{type}', [BookingController::class, 'refundPercentage']);
        Route::get('detail/{id}/{type}', [BookingController::class, 'details']);
        Route::get('decline/{id}', [BookingController::class, 'declineBookings']);
        Route::get('listing-detail/{id}/{type}', [BookingController::class, 'listingDetail']);

    });
});

Route::prefix('seller')->middleware('auth:sanctum')->group(function(){
    Route::prefix('booking')->group(function(){
        Route::get('pending-quote', [SellerBookingController::class, 'pendingQuoteRequest']);
        Route::get('pending/{type}', [SellerBookingController::class, 'pendingBookings']);

    });

    Route::prefix('dashboard')->group(function(){
        Route::get('/', [SellerOrderController::class, 'sellerDashboard']);

    });

    Route::prefix('space/form/step')->group(function(){
        Route::post('/addAddress', [SpaceController::class, 'addAddress']);
        Route::post('/updateAddress/{id}', [SpaceController::class, 'updateAddress']);
        Route::post('/addParking/{id}', [SpaceController::class, 'addParking']);
        Route::post('/addAbout/{id}', [SpaceController::class, 'addAbout']);
        Route::post('/addImages/{id}', [SpaceController::class, 'addImages']);
        Route::post('/addOpeartingHours/{id}', [SpaceController::class, 'addOperatingHours']);
        Route::post('/addSafetyMeasure/{id}', [SpaceController::class, 'addSafetyMeasure']);
        Route::post('/addCancelPolicy/{id}', [SpaceController::class, 'addCancelPolicy']);
        Route::post('/addActivities/{id}', [SpaceController::class, 'addActivities']);
        Route::post('/addContactInfo/{id}', [SpaceController::class, 'addContactInfo']);
        Route::post('/addPolicies/{id}', [SpaceController::class, 'addPolicies']);

    });
    Route::delete('space/delete/{id}', [SpaceController::class, 'destroy']);

    Route::prefix('space/form/load')->group(function(){
        Route::get('/parking-step/{id}', [SpaceController::class, 'parkingStep']);
        Route::get('/about-step/{id}', [SpaceController::class, 'aboutStep']);
        Route::get('/images-step/{id}', [SpaceController::class, 'imagesStep']);
        Route::get('/operating-step/{id}', [SpaceController::class, 'operatingHourStep']);
        Route::get('/safetyMeasure-step/{id}', [SpaceController::class, 'safetyMeasureStep']);
        Route::get('/cancelPolicy-step/{id}', [SpaceController::class, 'cancelPolicyStep']);
        Route::get('/activities-step/{id}', [SpaceController::class, 'activitiesStep']);
        Route::get('/contact-step/{id}', [SpaceController::class, 'contactStep']);
        Route::get('/policies-step/{id}', [SpaceController::class, 'policiesStep']);

    });

    Route::prefix('entertainment/form')->group(function(){
        Route::post('/step-1', [EntertainmentController::class, 'formStep1']);
        Route::post('/update/step-1/{id}', [EntertainmentController::class, 'updateFormStep1']);
        Route::post('/step-2/{id}', [EntertainmentController::class, 'FormStep2']);
        Route::post('/step-3/{id}', [EntertainmentController::class, 'FormStep3']);
        Route::post('/step-4/{id}', [EntertainmentController::class, 'FormStep4']);
        Route::post('/step-5/{id}', [EntertainmentController::class, 'FormStep5']);
        Route::post('/step-6/{id}', [EntertainmentController::class, 'FormStep6']);
        Route::post('/step-7/{id}', [EntertainmentController::class, 'FormStep7']);
        Route::post('/step-8/{id}', [EntertainmentController::class, 'FormStep8']);
        Route::post('/step-9/{id}', [EntertainmentController::class, 'FormStep9']);

    });
    Route::delete('entertainment/delete/{id}', [EntertainmentController::class, 'destroy']);

    Route::prefix('entertainment/form/load')->group(function(){
        Route::get('/step-1/{id}', [EntertainmentController::class, 'loadFormStep1']);
        Route::get('/step-2/{id}', [EntertainmentController::class, 'loadFormStep2']);
        Route::get('/step-3/{id}', [EntertainmentController::class, 'loadFormStep3']);
        Route::get('/step-4/{id}', [EntertainmentController::class, 'loadFormStep4']);
        Route::get('/step-5/{id}', [EntertainmentController::class, 'loadFormStep5']);
        Route::get('/step-6/{id}', [EntertainmentController::class, 'loadFormStep6']);
        Route::get('/step-7/{id}', [EntertainmentController::class, 'loadFormStep7']);
        Route::get('/step-8/{id}', [EntertainmentController::class, 'loadFormStep8']);
        Route::get('/step-9/{id}', [EntertainmentController::class, 'loadFormStep9']);

    });

    Route::prefix('service/form')->group(function(){
        Route::post('/step-1', [ServiceController::class, 'serviceForm1']);
        Route::post('/update/step-1/{id}', [ServiceController::class, 'UpdateFormStep1']);
        Route::post('/step-2/{id}', [ServiceController::class, 'serviceForm2']);
        Route::post('/step-3/{id}', [ServiceController::class, 'serviceForm3']);
        Route::post('/step-4/{id}', [ServiceController::class, 'serviceForm4']);
        Route::post('/step-5/{id}', [ServiceController::class, 'serviceForm5']);
        Route::post('/step-6/{id}', [ServiceController::class, 'serviceForm6']);
        Route::post('/step-7/{id}', [ServiceController::class, 'serviceForm7']);

    });
    Route::delete('service/delete/{id}', [ServiceController::class, 'destroy']);

    Route::prefix('service/form/load')->group(function(){
        Route::get('/step-1/{id}', [ServiceController::class, 'loadFormStep1']);
        Route::get('/step-2/{id}', [ServiceController::class, 'loadServiceForm2']);
        Route::get('/step-3/{id}', [ServiceController::class, 'loadserviceForm3']);
        Route::get('/step-4/{id}', [ServiceController::class, 'loadServiceForm4']);
        Route::get('/step-5/{id}', [ServiceController::class, 'loadServiceForm5']);
        Route::get('/step-6/{id}', [ServiceController::class, 'loadserviceForm6']);
        Route::get('/step-7/{id}', [ServiceController::class, 'loadserviceForm7']);

    });

});
