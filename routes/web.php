<?php

use App\Models\ServiceTitle;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Customer\BookingController;
use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Customer\CartController;
use App\Http\Controllers\Customer\PaymentController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Seller\ListingSpaceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\ServiceController;
use App\Http\Controllers\Seller\EntertainmentController;
use App\Http\Controllers\Seller\ListingController;

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
// Space Search
Route::get('/space_landing', [LandingController::class, 'space_index'])->name('space_landing_index');
Route::get('/space_results', [LandingController::class, 'space_search'])->name('space_search_results');
// Entertainments Search
Route::get('/entertainment_landing', [LandingController::class, 'entertainment_index'])->name('entertainment_landing_index');
Route::get('/entertainment_results', [LandingController::class, 'entertainment_search'])->name('entertainment_search_results');
// Space Search
Route::get('/service_landing', [LandingController::class, 'service_index'])->name('service_landing_index');
Route::get('/service_results', [LandingController::class, 'service_search'])->name('service_search_results');

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
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('edit-profile', [DashboardController::class, 'editProfileIndex'])->name('edit-profile-index');
    Route::post('edit-profile', [DashboardController::class, 'editProfile'])->name('edit-profile');
    Route::get('/add-space', function () {
        return view('content.seller.add-space');
    });

    Route::get('/notify-list', function () {
        return view('layouts.components.notify-list');
    });
    Route::get('/search-results', function () {
        return view('content.customer.search-results');
    });


    // Load Listings
    Route::get('spaces', [BookingController::class, 'space_index'])->name('spaces');
    Route::get('talent-&-entertainments', [BookingController::class, 'entertainment_index'])->name('entertainments_index');
    Route::get('services', [BookingController::class, 'service_index'])->name('services');
    // Load a listing
    Route::get('space-details/{space_id}', [BookingController::class, 'spaceDetail'])->name('space-details');
    Route::get('service-details/{id}', [BookingController::class, 'serviceDetail'])->name('service-details');
    Route::get('entertainment-details/{id}', [BookingController::class, 'entertainmentDetail'])->name('entertainment-details');
    // Cart Functions
    Route::post('cart-stores/{id}/{type}', [CartController::class, 'stores'])->name('cart-stores');
    Route::post('cart-store/{id}/{type}', [CartController::class, 'store'])->name('cart-store');
    Route::delete('delete-item/{id}/{type}', [CartController::class, 'destroy'])->name('cart-delete');
    // Checkout
    Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');
    // Review & Payment
    Route::get('review', [PaymentController::class, 'loadReview'])->name('load-review');
    Route::post('review-pay', [PaymentController::class, 'review'])->name('review-pay');
    Route::get('payment-successfull', [PaymentController::class, 'successfull'])->name('payment-successfull');
    Route::post('payment', [PaymentController::class, 'store_payment'])->name('payment-store');

    // Seller payment methods
    Route::get('payments', [PaymentController::class, 'paymentMethod'])->name('payments');
    Route::post('add-account', [PaymentController::class, 'addBankAccount'])->name('add-bank-account');
    Route::post('delete-account/{id}', [PaymentController::class, 'deleteBankAccount'])->name('delete-bank-account');

    // Language Function
    Route::get('language/{code}',[LanguageController::class, 'local'])->name('local');

    // Qutoe functions
    Route::post('send_quote/{id}', [QuoteController::class, 'send_quote'])->name('send_quote');
    Route::get('quote/{id}', [QuoteController::class, 'receive_quote'])->name('recieve_quote');
    Route::post('load-accept-quote/{id}', [QuoteController::class, 'load_accept_quote'])->name('load_accept_quote');
    Route::get('accept-quote/{id}', [QuoteController::class, 'accept_quote'])->name('accept_quote');
    Route::get('decline_quote/{id}', [QuoteController::class, 'decline_quote'])->name('decline_quote');
    Route::get('seller_decline_quote/{id}', [QuoteController::class, 'seller_decline_quote'])->name('seller_decline_quote');
    Route::post('send_seller_quote/{id}', [QuoteController::class, 'send_seller_quote'])->name('send_seller_quote');

    // Route::get('/test', [PaymentController::class, 'test'])->name('test');
    Route::get('bookings', [BookingController::class, 'bookings'])->name('bookings');


    // Seller side
    // backend k waqt sab ka prefix /seller/ lgana
    Route::get('/seller-dashboard', function () {
        return view('content.seller.dashboard');
    });
    Route::get('/add-space', function () {
        return view('content.seller.add-space');
    });

    Route::get('space-form-steps', [ListingSpaceController::class, 'listSpace'])->name('list-space');
    Route::get('address-step', [ListingSpaceController::class, 'addSpaceForm'])->name('add-space');
    Route::post('add-address', [ListingSpaceController::class, 'addAddress'])->name('add-address');
    Route::get('edit-space-address/{space_id}', [ListingSpaceController::class, 'editSpaceAddress'])->name('edit-space-address');
    Route::post('update-space-address/{space_id}', [ListingSpaceController::class, 'updateSpaceAddress'])->name('update-space-address');
    Route::get('parking-step/{space_id}', [ListingSpaceController::class, 'parkingStep'])->name('parking-step');
    Route::post('add-parking/{space_id}', [ListingSpaceController::class, 'addParking'])->name('add-parking');
    Route::get('about-step/{space_id}', [ListingSpaceController::class, 'aboutStep'])->name('about-step');
    Route::post('add-about/{space_id}', [ListingSpaceController::class, 'addAbout'])->name('add-about');
    Route::get('images-step/{space_id}', [ListingSpaceController::class, 'imagesStep'])->name('images-step');
    Route::post('add-images/{space_id}', [ListingSpaceController::class, 'addImages'])->name('add-images');
    Route::get('operating-hours-step/{space_id}', [ListingSpaceController::class, 'operatingHourStep'])->name('operating-hour-step');
    Route::post('add-operating-hours/{space_id}', [ListingSpaceController::class, 'addaddOperatingHours'])->name('add-operating-hours');
    Route::get('safety-measure-step/{space_id}', [ListingSpaceController::class, 'safetyMeasureStep'])->name('safety-measure-step');
    Route::post('add-safety-measure/{space_id}', [ListingSpaceController::class, 'addSafetyMeasure'])->name('add-safety-measure');
    Route::get('cancel-policy-step/{space_id}', [ListingSpaceController::class, 'cancelPolicyStep'])->name('cancel-policy-step');
    Route::post('add-cancel-policy/{space_id}', [ListingSpaceController::class, 'addCancelPolicy'])->name('add-cancel-policy');
    Route::get('activities-step/{space_id}/{key}', [ListingSpaceController::class, 'activitiesStep'])->name('activities-step');
    Route::post('add-activities/{space_id}', [ListingSpaceController::class, 'addActivities'])->name('add-activities');
    Route::get('contact-step/{space_id}', [ListingSpaceController::class, 'contactStep'])->name('contact-step');
    Route::post('add-contact-info/{space_id}', [ListingSpaceController::class, 'addContactInfo'])->name('add-contact-info');
    Route::get('policies-step/{space_id}', [ListingSpaceController::class, 'policiesStep'])->name('policies-step');
    Route::post('add-policies/{space_id}', [ListingSpaceController::class, 'addPolicies'])->name('add-policies');
    Route::get('space-form-resume/{space_id}', [ListingController::class, 'resumeSpaceForm'])->name('space-form-resume');
    Route::delete('space-delete/{space_id}', [ListingController::class, 'deleteListing'])->name('space-delete');

    Route::get('/list-entertainment', function () {
        return view('content.seller.list-entertainment');
    });
    Route::get('/add-entertainment', function () {
        return view('content.seller.add-entertainment');
    });


    Route::get('/add-service', function () {
        return view('content.seller.add-services');
    });
    Route::get('pending-bookings', [BookingController::class, 'pendingBookings'])->name('pending-bookings');
    Route::get('accept-bookings/{id}', [BookingController::class, 'acceptBookings'])->name('accept-bookings');
    Route::get('decline-bookings/{id}', [BookingController::class, 'declineBookings'])->name('decline-bookings');

    Route::get('/create-quote', function () {
        return view('content.seller.create-quote');
    });
    Route::get('calendar',[LandingPageController::class, 'calendarIndex'])->name('calendar');
    Route::get('get-operating-hours/{id}/{type}',[LandingPageController::class, 'getOperatingHours']);
    Route::get('operating-hours/{id}/{type}',[LandingPageController::class, 'getOperatingHoursIndex'])->name('operating-hours');
    Route::post('new-operating-hours/{id}/{type}',[LandingPageController::class, 'newOperatingHours'])->name('new-operating-hours');
    Route::post('add-block-time',[LandingPageController::class, 'addBlockTime'])->name('add-block-time');
    // My Listing
    Route::get('my-listings', [ListingController::class, 'index'])->name('my-listing');

    // Service Forms
    Route::get('/list-service', function () {
        return view('content.seller.list-service');
    });
    // Service Form Step 1
    Route::get('/service-form-steps', function () {
        $title = ServiceTitle::get();
        return view('content.seller.service.create.form-step-1', ['title' => $title]);
    });
    Route::post('/service_form_1', [ServiceController::class, 'serviceForm1'])->name('service_form_1');
    // Load Previous View Form Step 1
    Route::get('/service-form-step-1/{id}', [ServiceController::class, 'loadFormStep1'])->name('service-form-1');
    Route::post('/service_form_step_1/{id}', [ServiceController::class, 'UpdateFormStep1'])->name('update_service_form_1');
    // Service Form Step 2
    Route::get('/service-form-2/{id}', [ServiceController::class, 'loadServiceForm2'])->name('service-form-2');
    Route::post('/service_form_2/{id}', [ServiceController::class, 'serviceForm2'])->name('service_form_2');
    // Service Form Step 3
    Route::get('/service-form-3/{id}', [ServiceController::class, 'loadserviceForm3'])->name('service-form-3');
    Route::post('/service_form_3/{id}', [ServiceController::class, 'serviceForm3'])->name('service_form_3');
    // Service Form Step 4
    Route::get('/service-form-4/{id}', [ServiceController::class, 'loadserviceForm4'])->name('service-form-4');
    Route::post('/service_form_4/{id}', [ServiceController::class, 'serviceForm4'])->name('service_form_4');
    // Service Form Step 5
    Route::get('/service-form-5/{id}', [ServiceController::class, 'loadserviceForm5'])->name('service-form-5');
    Route::post('/service_form_5/{id}', [ServiceController::class, 'serviceForm5'])->name('service_form_5');
    // Service Form Step 6
    Route::get('/service-form-6/{id}', [ServiceController::class, 'loadserviceForm6'])->name('service-form-6');
    Route::post('/service_form_6/{id}', [ServiceController::class, 'serviceForm6'])->name('service_form_6');
    // Service Form Step 7
    Route::get('/service-form-7/{id}', [ServiceController::class, 'loadserviceForm7'])->name('service-form-7');
    Route::post('/service_form_7/{id}', [ServiceController::class, 'serviceForm7'])->name('service_form_7');
    // Complete Service Form
    Route::get('/completed', [ServiceController::class, 'complete'])->name('complete');
    // Delete Service
    Route::delete('/service-delete/{id}', [ServiceController::class, 'destroy'])->name('service-delete');
    // Resume Service
    Route::get('/service/resume/{id}', [ServiceController::class, 'resumeForm'])->name('service_form_resume');

    // Entertainment Routes
    Route::get('/entertainment-form-steps', function () {
        return view('content.seller.entertainment.create.form-step-1');
    });
    // Form Step 1
    Route::post('/entertainment/form/step/1', [EntertainmentController::class, 'formStep1'])->name('entertainment_form_1');
    Route::get('/entertainment/load/form/step/1/{id}', [EntertainmentController::class, 'loadFormStep1'])->name('load_entertainment_form_1');
    Route::post('/entertainment/update/form/step/1/{id}', [EntertainmentController::class, 'updateFormStep1'])->name('update_entertainment_form_1');
    // Form Step 2
    Route::get('/entertainment/load/form/step/2/{id}', [EntertainmentController::class, 'loadFormStep2'])->name('load_entertainment_form_2');
    Route::post('/entertainment/form/step/2/{id}', [EntertainmentController::class, 'formStep2'])->name('entertainment_form_2');
    // Form Step 3
    Route::get('/entertainment/load/form/step/3/{id}', [EntertainmentController::class, 'loadFormStep3'])->name('load_entertainment_form_3');
    Route::post('/entertainment/form/step/3/{id}', [EntertainmentController::class, 'formStep3'])->name('entertainment_form_3');
    // Form Step 4
    Route::get('/entertainment/load/form/step/4/{id}', [EntertainmentController::class, 'loadFormStep4'])->name('load_entertainment_form_4');
    Route::post('/entertainment/form/step/4/{id}', [EntertainmentController::class, 'formStep4'])->name('entertainment_form_4');
    // Form Step 5
    Route::get('/entertainment/load/form/step/5/{id}', [EntertainmentController::class, 'loadFormStep5'])->name('load_entertainment_form_5');
    Route::post('/entertainment/form/step/5/{id}', [EntertainmentController::class, 'formStep5'])->name('entertainment_form_5');
    // Form Step 6
    Route::get('/entertainment/load/form/step/6/{id}', [EntertainmentController::class, 'loadFormStep6'])->name('load_entertainment_form_6');
    Route::post('/entertainment/form/step/6/{id}', [EntertainmentController::class, 'formStep6'])->name('entertainment_form_6');
    // Form Step 7
    Route::get('/entertainment/load/form/step/7/{id}', [EntertainmentController::class, 'loadFormStep7'])->name('load_entertainment_form_7');
    Route::post('/entertainment/form/step/7/{id}', [EntertainmentController::class, 'formStep7'])->name('entertainment_form_7');
    // Form Step 8
    Route::get('/entertainment/load/form/step/8/{id}', [EntertainmentController::class, 'loadFormStep8'])->name('load_entertainment_form_8');
    Route::post('/entertainment/form/step/8/{id}', [EntertainmentController::class, 'formStep8'])->name('entertainment_form_8');
    // Form Step 9
    Route::get('/entertainment/load/form/step/9/{id}', [EntertainmentController::class, 'loadFormStep9'])->name('load_entertainment_form_9');
    Route::post('/entertainment/form/step/9/{id}', [EntertainmentController::class, 'formStep9'])->name('entertainment_form_9');
    // Delete Enterainemnt
    Route::delete('/entertainment-delete/{id}', [EntertainmentController::class, 'destroy'])->name('entertainment-delete');
    // Resume Entertainment
    Route::get('/entertainment/resume/{id}', [EntertainmentController::class, 'resumeForm'])->name('entertainment-form-resume');
    // Update Entertainment Activities
    Route::get('/entertainment/update/form/step/7/{id}/{key}', [EntertainmentController::class, 'loadUpdateFormStep7'])->name('load_entertainment_form_step_7');
    Route::post('/entertainment/update/form/step/7/{id}', [EntertainmentController::class, 'UpdateFormStep7'])->name('update_entertainment_form_7');
});


// Route::get('/seller-profile', function () {
//     return view('layouts.seller.seller-profile');
// });
// Route::get('/seller-profile-verified', function () {
//     return view('layouts.seller.seller-profile-verified');
// });
