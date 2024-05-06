<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/courses', function () {
    return 'courses';
})->name('courses');

Route::get('/blogs', function () {
    return 'blogs';
})->name('blogs');

// Route::prefix('auth')->group(function() {
//     Route::get('login', )
// })
