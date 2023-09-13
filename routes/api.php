<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\Customer\DashboardController;
use App\Http\Controllers\Api\Customer\ListingController;
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
        Route::get('/{type}', [ListingController::class, 'listing']);
        Route::post('/filter/{type}', [ListingController::class, 'filter']);
    });

});
