<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\LoginController;

Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login']);
    // يمكنك إضافة المزيد من الطرق هنا
});
use App\Http\Controllers\Admin\RegisterController;

Route::prefix('admin')->group(function () {
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('register', [RegisterController::class, 'register'])->name('admin.register');
    // يمكنك إضافة المزيد من الطرق هنا
});