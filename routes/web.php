<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\LoginController::class, 'index'])->name('index');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');


Route::get('/admin', [App\Http\Controllers\AdminHomeController::class, 'index'])->name('admin.index');
Route::get('/admin/user_list', [App\Http\Controllers\AdminHomeController::class, 'users'])->name('user.list');
Route::get('/admin/customers', [App\Http\Controllers\CustomerController::class, 'index'])->name('admin.customers');
Route::get('/admin/products', [App\Http\Controllers\ProductController::class, 'index'])->name('admin.products');
Route::get('/admin/category', [App\Http\Controllers\ProductController::class, 'category'])->name('admin.category');
Route::get('/admin/transactions', [App\Http\Controllers\TansactionController::class, 'index'])->name('admin.transactions');
Route::get('/admin/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('admin.settings');
Route::get('/admin/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('admin.orders');
Route::get('/admin/daily_reports', [App\Http\Controllers\ReportsController::class, 'dailyReports'])->name('admin.daily_reports');
Route::get('/admin/weekly_reports', [App\Http\Controllers\ReportsController::class, 'weeklyReports'])->name('admin.weekly_reports');
Route::get('/admin/monthly_reports', [App\Http\Controllers\ReportsController::class, 'monthlyReports'])->name('admin.monthly_reports');
Route::get('/admin/annual_reports', [App\Http\Controllers\ReportsController::class, 'annualReports'])->name('admin.annual_reports');
Route::get('/admin/user/edit', [App\Http\Controllers\AdminHomeController::class, 'edit'])->name('user.edit');
 
// Route::group(['middleware' => 'auth', 'prefix' => 'shopping-mall'], function () {

    Route::get('/cart', [App\Http\Controllers\ShoppingMallController::class, 'cart'])->name('user.cart');

// });


