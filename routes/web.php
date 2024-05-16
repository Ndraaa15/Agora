<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.home');
});

Route::prefix('auth')->group(function () {
    Route::view('signin', 'web.auth.signin');
    Route::view('signup', 'web.auth.signup');
});

Route::prefix('static')->group(function () {
    Route::view('/faq', 'web.static.faq');
});
