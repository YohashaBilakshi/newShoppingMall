<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::get('/admin', [App\Http\Controllers\AdminHomeController::class, 'index'])->name('admin.index');
Route::get('/admin/customers', [App\Http\Controllers\CustomerController::class, 'index'])->name('admin.customers');
Route::get('/admin/products', [App\Http\Controllers\ProductController::class, 'index'])->name('admin.products');
Route::get('/admin/category', [App\Http\Controllers\ProductController::class, 'category'])->name('admin.category');




// Route::post('add_ticket', [App\Http\Controllers\TicketController::class, 'save']);
// Route::post('/add_ticket', [App\Http\Controllers\TicketController::class, 'add_ticket']);
