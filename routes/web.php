<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;


// Public routes
Route::prefix('/')->group(function () {
    Route::view('', 'web.home')->name('home');
    Route::view('faq', 'web.static.faq')->name('faq');
    Route::view('about-us', 'web.static.about')->name('about-us');
});

// User routes
Route::prefix('user')->group(function () {
    Route::get('profile', [UserController::class, 'profile'])->name('user-profile');
    Route::get('tickets', [UserController::class, 'ticket'])->name('user-ticket');
    Route::get('wishlist', [UserController::class, 'wishlist'])->name('user-wishlist');
    Route::get('payment', [UserController::class, 'payment'])->name('user-payment');
});

// Authentication routes
Route::prefix('auth')->group(function () {
    Route::view('signin', 'web.auth.signin')->name('signin');
    Route::view('signup', 'web.auth.signup')->name('signup');
    Route::post('signin', [AuthController::class, 'signin'])->name('signin-post');
    Route::post('signup', [AuthController::class, 'signup'])->name('signup-post');
    Route::get('signout', [AuthController::class, 'signout'])->name('signout');
});

// Event routes
Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('events');
    Route::get('/{event_id}', [EventController::class, 'show'])->name('event');
});

// Checkout routes
Route::prefix('checkout')->group(function () {
    Route::post('', [OrderController::class, 'checkout'])->name('checkout-order');
    Route::get('/{ticket_section_id}', [OrderController::class, 'index'])->name('checkout');
});

// Wishlist routes
Route::prefix('wishlist')->group(function () {
    Route::post('/{event_id}', [WishlistController::class, 'addWishlist'])->name('add-wishlist');
});

Route::prefix('admin')->group(function(){
    Route::get('event/event', [Admin\EventController::class, 'index'])->name('crud.index');
    Route::get('event/create', [Admin\EventController::class, 'create'])->name('crud.create');
    Route::post('event/create/store', [Admin\EventController::class, 'store'])->name('crud.store');
    Route::get('event/edit/{id}', [Admin\EventController::class, 'edit'])->name('crud.edit');
    Route::post('event/edit/editsave/{id}', [Admin\EventController::class, 'editsave'])->name('crud.update');
    Route::get('event/delete/{id}', [Admin\EventController::class, 'delete'])->name('crud.delete');
    Route::get('event/show/{id}', [Admin\EventController::class, 'show'])->name('crud.show');
});
