<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Seller\ListingSpaceController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Seller\ServiceController;
Use App\Http\Controllers\Seller\EntertainmentController;

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
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('edit-profile', [DashboardController::class, 'editProfileIndex'])->name('edit-profile-index');
    Route::post('edit-profile', [DashboardController::class, 'editProfile'])->name('edit-profile');
    // Route::get('/edit-profile', function () {
    //     return view('content.edit-profile');
    // });
    Route::get('/add-space', function () {
        return view('content.seller.add-space');
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

    Route::get('space-form-steps', [ListingSpaceController::class, 'listSpace'])->name('list-space');
    Route::get('address-step', [ListingSpaceController::class, 'addSpaceForm'])->name('add-space');
    Route::post('add-address', [ListingSpaceController::class, 'addAddress'])->name('add-address');
    Route::get('parking-step/{space_id}', [ListingSpaceController::class, 'parkingStep'])->name('parking-step');
    Route::post('add-parking/{space_id}', [ListingSpaceController::class, 'addParking'])->name('add-parking');
    Route::get('about-step/{space_id}', [ListingSpaceController::class, 'aboutStep'])->name('about-step');
    Route::post('add-about/{space_id}', [ListingSpaceController::class, 'addAbout'])->name('add-about');
    Route::get('images-step/{space_id}', [ListingSpaceController::class, 'imagesStep'])->name('images-step');
    Route::post('add-images/{space_id}', [ListingSpaceController::class, 'addImages'])->name('add-images');
    Route::get('operating-hour-step/{space_id}', [ListingSpaceController::class, 'operatingHourStep'])->name('operating-hour-step');
    Route::get('safety-measure-step/{space_id}', [ListingSpaceController::class, 'safetyMeasureStep'])->name('safety-measure-step');
    Route::post('add-safety-measure/{space_id}', [ListingSpaceController::class, 'addSafetyMeasure'])->name('add-safety-measure');
    Route::get('cancel-policy-step/{space_id}', [ListingSpaceController::class, 'cancelPolicyStep'])->name('cancel-policy-step');
    Route::post('add-cancel-policy/{space_id}', [ListingSpaceController::class, 'addCancelPolicy'])->name('add-cancel-policy');
    Route::get('activities-step/{space_id}', [ListingSpaceController::class, 'activitiesStep'])->name('activities-step');
    Route::post('add-activities/{space_id}', [ListingSpaceController::class, 'addActivities'])->name('add-activities');
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
    

    Route::get('/add-service', function () {
        return view('content.seller.add-services');
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
    // Service Forms
    Route::get('/list-service', function () {
        return view('content.seller.list-service');
    });
    Route::get('/service-form-steps', function () {
        return view('content.seller.service.create.form-step-1');
    });
    // Service Form Step 1
    Route::post('/service_form_1', [ServiceController::class, 'serviceForm1'])->name('service_form_1');
    Route::get('/service-form-2/{id}', [ServiceController::class, 'loadServiceForm2'])->name('service-form-2');
    // Service Form Step 2
    Route::post('/service_form_2/{id}', [ServiceController::class, 'serviceForm2'])->name('service_form_2');
    Route::get('/service-form-3/{id}', [ServiceController::class, 'loadserviceForm3'])->name('service-form-3');
    // Service Form Step 3
    Route::post('/service_form_3/{id}', [ServiceController::class, 'serviceForm3'])->name('service_form_3');
    Route::get('/service-form-4/{id}', [ServiceController::class, 'loadserviceForm4'])->name('service-form-4');
    // Service Form Step 4
    Route::post('/service_form_4/{id}', [ServiceController::class, 'serviceForm4'])->name('service_form_4');
    Route::get('/service-form-5/{id}', [ServiceController::class, 'loadserviceForm5'])->name('service-form-5');
    // Service Form Step 5
    Route::post('/service_form_5/{id}', [ServiceController::class, 'serviceForm5'])->name('service_form_5');
    Route::get('/service-form-6/{id}', [ServiceController::class, 'loadserviceForm6'])->name('service-form-6');
    // Service Form Step 6
    Route::post('/service_form_6/{id}', [ServiceController::class, 'serviceForm6'])->name('service_form_6');
    Route::get('/service-form-7/{id}', [ServiceController::class, 'loadserviceForm7'])->name('service-form-7');
    // Service Form Step 7
    Route::post('/service_form_7/{id}', [ServiceController::class, 'serviceForm7'])->name('service_form_7');
    Route::get('/completed', [ServiceController::class, 'complete'])->name('complete');
    // Load Previous View Form Stpe 1
    Route::get('/service-form-step-1/{id}', [ServiceController::class, 'loadFormStep1'])->name('service-form-1');
    Route::post('/service_form_step_1/{id}', [ServiceController::class, 'UpdateFormStep1'])->name('update_service_form_1');
    
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

});


// Route::get('/seller-profile', function () {
//     return view('layouts.seller.seller-profile');
// });
// Route::get('/seller-profile-verified', function () {
//     return view('layouts.seller.seller-profile-verified');
// });
