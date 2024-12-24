<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Home page route
Route::get('/', function () {
    return view('homepage');
})->name('homepage');

// Shop page route
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

// About page route
Route::get('/about', function () {
    return view('about');
})->name('about');

// Account page route
Route::get('/account', function () {
    return view('account');
})->name('account');

// Show the registration form
Route::get('/user/create', [UserController::class, 'showForm'])->name('user.create');

// Handle form submission
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

Route::get('/dashboard', function () {
    return redirect()->route('shop'); // Redirect to shop or any other route you prefer
})->name('dashboard');
// Authentication routes 
require __DIR__.'/auth.php';
