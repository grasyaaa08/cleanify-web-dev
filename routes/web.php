<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Redirect root to login
Route::get('/', function () {
    return redirect()->route('login');
});

// Login routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Signup routes
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.post');

// Welcome / homepage
Route::get('/welcome', function() {
    return view('home'); // for screenshot purposes, no login required
})->name('welcome');

// Temporary route for direct homepage viewing
Route::get('/home', function () {
    return view('home'); // direct homepage view
});

// Logout route (dummy, just redirect)
Route::post('/logout', function(){
    return redirect()->route('login');
})->name('logout');