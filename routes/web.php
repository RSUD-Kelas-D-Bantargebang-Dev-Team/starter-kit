<?php

use App\Http\Controllers\{UserController, RoleAndPermissionController, ProfileController};
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/', fn() => view('dashboard'));
    Route::get('/dashboard', fn() => view('dashboard'));
    Route::get('/profile', ProfileController::class)->name('profile');

    Route::resource('/users', UserController::class);
    Route::resource('/roles', RoleAndPermissionController::class);
});
