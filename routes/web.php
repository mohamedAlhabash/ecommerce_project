<?php

use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\ProductCategories;
use App\Http\Controllers\Backend\ProductCategoriesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Models\ProductCategory;

// Route::get('/boutique',[FrontendController::class,'index']);

// Route::prefix('/boutique')->name('boutique.')->group(function () {
Route::get('/', [FrontendController::class, 'index'])->name('boutique.index');
Route::get('/cart', [FrontendController::class, 'cart'])->name('boutique.cart');
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('boutique.checkout');
Route::get('/shop', [FrontendController::class, 'shop'])->name('boutique.shop');
Route::get('/detail', [FrontendController::class, 'detail'])->name('boutique.detail');
Route::get('/register', [FrontendController::class, 'register'])->name('register');


// Route::get('/login', [FrontendController::class, 'login'])->name('login');
// });

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [BackendController::class, 'login'])->name('login');
        Route::get('forgot-password', [BackendController::class, 'forgot_password'])->name('forgot_password');
    });
    Route::middleware(['roles', 'role:admin|supervisor'])->group(function () {
        Route::get('', [BackendController::class, 'index'])->name('index_route');
        Route::get('index', [BackendController::class, 'index'])->name('index');
        Route::resource('product_categories',ProductCategoriesController::class);
    });
});
// Route::get('/', function () {
//    return view('welcome');
// });

Auth::routes(['verify' => true]);

// Route::get('/home', [HomeController::class, 'index'])->name('home');
