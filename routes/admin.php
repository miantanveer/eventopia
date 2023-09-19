<?php

use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\AuthenticationController;


use Illuminate\Support\Facades\Route;



Route::get('/admin', function () {
    return redirect(route('admin.login'));
});

// Authentications
Route::get('admin/login', [AuthenticationController::class, 'loginIndex'])->name('admin.login');
Route::post('admin/login', [AuthenticationController::class, 'login']);

