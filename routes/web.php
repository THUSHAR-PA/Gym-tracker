<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// 📌 Public Home Page (accessible to everyone)
Route::get('/', function () {
    return view('home');
})->name('home');

// 🔐 Authentication routes for guests only
Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::view('/signup', 'auth.register')->name('register');
    Route::post('/signup', [AuthController::class, 'register']);
});

// 🚪 Logout route for authenticated users
Route::post('/logout', [AuthController::class, 'logout'])
     ->middleware('auth')
     ->name('logout');
