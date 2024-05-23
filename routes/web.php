<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrderController;

Route::prefix('/')->group(function () {
    Route::view('', 'web.home')->name('home');
    Route::view('faq', 'web.static.faq')->name('faq');
});

Route::prefix('auth')->group(function () {
    Route::view('signin', 'web.auth.signin')->name('signin');
    Route::view('signup', 'web.auth.signup')->name('signup');
    Route::post('signin', [AuthController::class , 'signin'])->name('signin-post');
    Route::post('signup', [AuthController::class , 'signup'])->name('signup-post');
    Route::post('signout', [AuthController::class , 'signout'])->name('signout');
});

Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('events');
    Route::get('/{event_id}', [EventController::class, 'show'])->name('event');
});

Route::prefix('checkout')->group(function () {
    Route::get('/{ticket_section_id}', [OrderController::class, 'index'])->name('checkout');
});

