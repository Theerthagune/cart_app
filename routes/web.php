<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;

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

/*Route::get('/cart', function () {
    return view('cart');
})->name('cart');*/

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'store'])->name('cart.store');
Route::patch('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

// Authentication routes 
require __DIR__.'/auth.php';
