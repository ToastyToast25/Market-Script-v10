<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TelegramController;

Route::name('auth.')->group(function () {
    include 'auth.php';
});

Route::prefix('admin')->group(function () {
    Route::middleware(['admin_panel_access'])->group(function () {
        include 'admin.php';
    });
});

// Profile routes
Route::middleware(['auth'])->group(function () {
    Route::get('banned', [ProfileController::class, 'banned'])->name('profile.banned');
    Route::middleware(['is_banned'])->group(function () {
        include 'profile.php';
    });
});

Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/category/{category}', [IndexController::class, 'category'])->name('category.show');

Route::get('/login', [IndexController::class, 'login'])->name('login');
Route::get('/confirmation', [IndexController::class, 'confirmation'])->name('confirmation');

Route::get('setview/{list}', [IndexController::class, 'setView'])->name('setview');

// Product routes
Route::get('product/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('product/{product}/rules', [ProductController::class, 'showRules'])->name('product.rules');
Route::get('product/{product}/feedback', [ProductController::class, 'showFeedback'])->name('product.feedback');
Route::get('product/{product}/delivery', [ProductController::class, 'showDelivery'])->name('product.delivery');
Route::get('product/{product}/vendor', [ProductController::class, 'showVendor'])->name('product.vendor');

// category routes
Route::get('category/{category}', [IndexController::class, 'category'])->name('category.show');

// vendor routes
Route::get('vendor/{user}', [IndexController::class, 'vendor'])->name('vendor.show');
Route::get('vendor/{user}/feedback', [IndexController::class, 'vendorsFeedbacks'])->name('vendor.show.feedback');

Route::post('search', [SearchController::class, 'search'])->name('search');
Route::get('search', [SearchController::class, 'searchShow'])->name('search.show');

Route::get('/rules', [IndexController::class, 'getRules'])->name('pages.rules');
Route::get('/buyer', [IndexController::class, 'getbuyerGuide'])->name('pages.buyer');
Route::get('/pgp', [IndexController::class, 'getPGPKey'])->name('pages.pgp');
Route::get('/aboutus', [IndexController::class, 'getAboutus'])->name('pages.about');
Route::get('/payments', [IndexController::class, 'getPayments'])->name('pages.payments');
Route::get('/vendor', [IndexController::class, 'getVendor'])->name('pages.vendor');

Route::get('/telegram_update', [TelegramController::class, 'getUpdate']);
