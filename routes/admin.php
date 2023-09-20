<?php

use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return redirect(route('admin.login'));
});

// Authentications
Route::get('admin/login', [AuthenticationController::class, 'adminLoginIndex'])->name('admin.login');
Route::post('admin/login', [AuthenticationController::class, 'adminLogin']);

//Logout
Route::get('admin/logout', [AuthenticationController::class, 'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'as' => 'admin.'],function(){
    Route::get('forget-password', [AuthenticationController::class, 'forgetPassword'])->name('forget.password');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => ['admin.auth']], function () {

    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index');
});
