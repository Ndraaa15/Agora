<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function () {
    Route::view('signin', 'web.auth.signin');
    Route::view('signup', 'web.auth.signup');
});
