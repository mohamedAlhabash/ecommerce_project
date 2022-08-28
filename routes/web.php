<?php

use App\Http\Controllers\Backend\BackendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\FrontendController;

// Route::get('/boutique',[FrontendController::class,'index']);

Route::prefix('/boutique')->name('boutique.')->group(function () {
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
    Route::get('/detail', [FrontendController::class, 'detail'])->name('detail');
    Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
    Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
    Route::get('/login', [FrontendController::class, 'login'])->name('login');
});

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('', [BackendController::class, 'index'])->name('index');
    Route::get('login', [BackendController::class, 'login'])->name('login');
    Route::get('forgot-password', [BackendController::class, 'forgot_password'])->name('forgot_password');
});
//Route::get('/', function () {
//    return view('layouts.app');
//});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
