<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Make the homepage display the product list
Route::get('/', [ProductController::class, 'index']);

// Register all resource routes for Product CRUD
Route::resource('products', ProductController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
