<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\customerAuthcontroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;

// Main home route
Route::get('/', function () {
    return view('home');
})->name('homeroute');

// Authentication routes
Route::post('/login', [Authcontroller::class, 'login'])->name('login');

/* Admin Routes */
Route::prefix('admin')->group(function () {
    // Admin login view
    Route::get('/login', function () {
        return view('admin.login');
    });

    // Admin logout
    Route::get('/logout', [Authcontroller::class, 'logout']);
    Route::get('/dashboard', [Authcontroller::class,'dashboard'])->name('admin_dashboard');
    //Route::get('admin/category', [CategoryController::class, 'index']);
    Route::resource('category', CategoryController::class);
    Route::resource('brands', brandController::class);


    // Admin dashboard view
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    // Nested customer routes under admin
    Route::prefix('/shop')->group(function () {
        Route::get('/cart',function(){
            return view('shop/cart');
        });
        Route::get('/shop-grid',function(){
            return view('shop/shop-grid'); //shop-grid.blade.php
        });
        Route::get('/my-account',function(){
            return view('shop/my-account'); //my-account.blade.php
        });
        Route::get('/my-account',function(){
            return view('shop/my-account'); //my-account.blade.php
        });
        Route::get('/track-your-order',function(){
            return view('shop/track-your-order'); //my-account.blade.php
        });
        Route::get('/compare',function(){
            return view('shop/compare'); //compare.blade.php
        });
        Route::get('/shop',function(){
            return view('shop/shop'); //shop.blade.php
        });
        Route::get('/checkout',function(){
            return view('shop/checkout'); //checkout.blade.php
        });
    });
    Route::prefix('customer')->group(function () {
        Route::post('/register', [customerAuthcontroller::class,'register'])->name('customerRegister');
    });
});
