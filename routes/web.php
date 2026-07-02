<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('products.index');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/welcome', function () {
    return view('welcome');
});
