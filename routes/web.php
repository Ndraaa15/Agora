<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HandlercrudController;

// Public routes
Route::prefix('/')->group(function () {
    Route::view('', 'web.home')->name('home');
    Route::view('faq', 'web.static.faq')->name('faq');
});

// Authentication routes
Route::prefix('auth')->group(function () {
    Route::view('signin', 'web.auth.signin')->name('signin');
    Route::view('signup', 'web.auth.signup')->name('signup');
    Route::post('signin', [AuthController::class, 'signin'])->name('signin-post');
    Route::post('signup', [AuthController::class, 'signup'])->name('signup-post');
    Route::post('signout', [AuthController::class, 'signout'])->name('signout');
    Route::view('about', 'web.static.about')->name('about');
});

// Event routes
Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('events');
    Route::get('/{event_id}', [EventController::class, 'show'])->name('event');
});

// Checkout routes
Route::prefix('checkout')->group(function () {
    Route::get('/{ticket_section_id}', [OrderController::class, 'index'])->name('checkout');
});

<<<<<<< Updated upstream


Route::get('/crud', [HandlercrudController::class, 'index'])->name('crud.index');
Route::get('/crud/create', [HandlercrudController::class, 'create'])->name('crud.create');
Route::post('/crud/create/store', [HandlercrudController::class, 'store'])->name('crud.store');
Route::get('/crud/edit/{id}', [HandlercrudController::class, 'edit'])->name('crud.edit');
Route::post('/crud/edit/editsave/{id}', [HandlercrudController::class, 'editsave'])->name('crud.update');
Route::get('/crud/delete/{id}', [HandlercrudController::class, 'delete'])->name('crud.delete');
Route::get('/crud/show/{id}', [HandlercrudController::class, 'show'])->name('crud.show');
=======
Route::prefix('user')->group(function () {
    Route::view('profile', 'web.user.profile');
    Route::view('ticket', 'web.user.ticket');
    Route::view('wishlist', 'web.user.wishlist');

    
});
>>>>>>> Stashed changes
