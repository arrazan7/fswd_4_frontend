<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login-test', function () {
    return view('login');
});
Route::get('/register-test', function () {
    return view('register');
});
Route::get('/home-test', function () {
    return view('home');
});
Route::get('/profile-test', function () {
    return view('profile');
});
Route::get('/profilebooking-test', function () {
    return view('profile_booking');
});
Route::get('/order-test', function () {
    return view('order');
});
Route::get('/confirm-test', function () {
    return view('confirm');
});

Route::get('/home', [TravelController::class, 'index'])->name('home');
Route::post('/filter', [TravelController::class, 'filter'])->name('filter_travel');
Route::get('/login', [UserController::class, 'login'])->name('login_page');
Route::get('/register', [UserController::class, 'register'])->name('register_page');
Route::post('/registerAccount', [UserController::class, 'storeRegister'])->name('register_account');
Route::post('/auth', [UserController::class, 'authenticate'])->name('authentication');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::post('/profileupdate/{id}', [UserController::class, 'update'])->name('profileupdate');
Route::get('/create-booking/{id_travel}', [BookingController::class, 'create'])->name('create_booking');
Route::post('/confirm', [BookingController::class, 'confirm'])->name('confirm');
Route::post('/store-booking', [BookingController::class, 'store'])->name('store_booking');
Route::get('/profile-booking', [BookingController::class, 'index'])->name('profile_booking');
Route::get('/destroy-booking/{id}', [BookingController::class, 'destroy'])->name('destroy_booking');
