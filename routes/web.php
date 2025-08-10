<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/forgot-password', 'forgotPassword')->name('forgot.password');
});

// Route::controller(UserController::class)->group(function () {
//     Route::get('/login', 'login')->name('user.create');
//     Route::get('/register', 'register')->name('user.create');
//     Route::post('/store', 'store')->name('user.store');
// });


Route::controller(LandingPageController::class)->group(function () {
    Route::get('/', 'index')->name('landing');
});


Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index')->name('posts.index');
    Route::post('/store', 'store')->name('user.store');
});
