<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, CourseController};

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/courses', [CourseController::class, 'page'])->name('courses');

Route::get('/blogs', function () {
    return 'blogs';
})->name('blogs');

Route::prefix('info')->group(function () {
    Route::get('/about-us', function() {
        return view('info.about-us');
    })->name('about-us');
    Route::get('/contact-us', function() {
        return view('info.contact-us');
    })->name('contact-us');
    Route::get('/terms-of-services', function() {
        return view('info.terms-of-services');
    })->name('terms-of-services');
});

Route::prefix('auth')->group(function () {
    Route::get('/login', [UserController::class, 'login_page'])->name('login')->middleware('guest');
    Route::post('/login', [UserController::class, 'login'])->middleware('guest');
    Route::get('/register', [UserController::class, 'regiser_page'])->name('register')->middleware('guest');
    Route::post('/register', [UserController::class, 'register'])->middleware('guest');
    Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/account', [UserController::class, 'account_page'])->name('account');
});
