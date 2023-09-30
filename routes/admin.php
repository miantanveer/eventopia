<?php

use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PluginsController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return redirect(route('admin.login'));
});

// Authentications
Route::get('admin/login', [AuthenticationController::class, 'adminLoginIndex'])->name('admin.login');
Route::post('admin/login', [AuthenticationController::class, 'adminLogin']);

//Logout
Route::get('admin/logout', [AuthenticationController::class, 'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('forget-password', [AuthenticationController::class, 'forgetPasswordIndex'])->name('forget.password');
    Route::post('forget-password', [AuthenticationController::class, 'forgetPassword'])->name('forget-password');
    Route::post('verify-code', [AuthenticationController::class, 'verifyCode'])->name('verify.code');
    Route::get('reset-password', [AuthenticationController::class, 'resetPasswordIndex'])->name('reset.password');
    Route::post('reset-password', [AuthenticationController::class, 'resetPassword'])->name('reset-password');
    Route::post('resend-otp', [AuthenticationController::class, 'sendOtp'])->name('resend.otp');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['admin.auth']], function () {

    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index');

    // Users
    Route::get('users', [UsersController::class, 'usersIndex'])->name('users.index');
    Route::post('add-user', [UsersController::class, 'addUser'])->name('add.user');
    Route::post('edit-user/{id}', [UsersController::class, 'editUser'])->name('edit.user');
    Route::post('delete-user/{id}', [UsersController::class, 'deleteUser'])->name('delete.user');

    // Plugins
    Route::group(['prefix' => 'plugins', 'as' => 'plugins.'], function () {

        Route::get('/', [PluginsController::class, 'index'])->name('index');
        Route::get('/{plugin}', [PluginsController::class, 'plugin'])->name('plugin');
        Route::put('/update', [PluginsController::class, 'update'])->name('update');
    });

});
