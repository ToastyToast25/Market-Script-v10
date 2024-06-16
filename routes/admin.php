<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\BitmessageController;
use Illuminate\Support\Facades\Route;

// Admin index
Route::get('index', [AdminController::class, 'index'])->name('admin.index');

// Categories routes
Route::get('categories', [AdminController::class, 'categories'])->name('admin.categories');
Route::post('category/new', [AdminController::class, 'newCategory'])->name('admin.categories.new');
Route::get('category/delete/{id}', [AdminController::class, 'removeCategory'])->name('admin.categories.delete');
Route::get('category/{id}', [AdminController::class, 'editCategoryShow'])->name('admin.categories.show');
Route::post('category/{id}', [AdminController::class, 'editCategory'])->name('admin.categories.edit');

// Mass message routes
Route::get('message', [AdminController::class, 'massMessage'])->name('admin.messages.mass');
Route::post('message/send', [AdminController::class, 'sendMessage'])->name('admin.messages.send');

// User routes
Route::get('users', [AdminUserController::class, 'users'])->name('admin.users');
Route::post('users/query', [AdminUserController::class, 'usersPost'])->name('admin.users.query');
Route::get('users/{user?}', [AdminUserController::class, 'userView'])->name('admin.users.view');
Route::post('users/edit/group/{user}', [AdminUserController::class, 'editUserGroup'])->name('admin.user.edit.group');
Route::post('users/edit/info/{user}', [AdminUserController::class, 'editBasicInfo'])->name('admin.user.edit.info');
Route::post('users/ban/{user}', [AdminUserController::class, 'banUser'])->name('admin.user.ban');
Route::get('users/remove/ban/{ban}', [AdminUserController::class, 'removeBan'])->name('admin.ban.remove');

// Log
Route::get('log', [LogController::class, 'showLog'])->name('admin.log');

// Products
Route::get('products', [AdminProductController::class, 'products'])->name('admin.products');
Route::post('products/query', [AdminProductController::class, 'productsPost'])->name('admin.products.query');
Route::post('product/delete', [AdminProductController::class, 'deleteProduct'])->name('admin.product.delete');
Route::get('product/{id}/{section?}', [AdminProductController::class, 'editProduct'])->name('admin.product.edit');
Route::get('purchases', [AdminProductController::class, 'purchases'])->name('admin.purchases');

// Bitmessage
Route::get('bitmessage', [BitmessageController::class, 'show'])->name('admin.bitmessage');

// Disputes
Route::get('disputes', [AdminController::class, 'disputes'])->name('admin.disputes');
Route::get('purchase/{purchase}', [AdminController::class, 'purchase'])->name('admin.purchase');

// Support tickets
Route::get('tickets', [AdminController::class, 'tickets'])->name('admin.tickets');
Route::get('ticket/{ticket}', [AdminController::class, 'viewTicket'])->name('admin.tickets.view');
Route::get('ticket/{ticket}/solve', [AdminController::class, 'solveTicket'])->name('admin.tickets.solve');

// Vendor purchases
Route::get('vendor/purchases', [AdminController::class, 'vendorPurchases'])->name('admin.vendor.purchases');

// Featured products
Route::get('products/featured', [AdminProductController::class, 'featuredProductsShow'])->name('admin.featuredproducts.show');
Route::get('products/featured/mark/{product}', [AdminProductController::class, 'markAsFeatured'])->name('admin.product.markfeatured');
Route::post('products/featured/remove', [AdminProductController::class, 'removeFromFeatured'])->name('admin.featuredproducts.remove');

// Remove tickets
Route::post('tickets/remove', [AdminController::class, 'removeTickets'])->name('admin.tickets.remove');
