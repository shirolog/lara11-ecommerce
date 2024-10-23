<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/category', [CategoryController::class, 'index'])
->name('category.index');
Route::post('/category', [CategoryController::class, 'store'])
->name('category.store');
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])
->name('category.edit');
Route::delete('/category/{category}', [CategoryController::class, 'destroy'])
->name('category.destroy');

Route::get('/product', [ProductController::class, 'index'])
->name('product.index');
Route::post('/product', [ProductController::class, 'store'])
->name('product.store');
Route::get('/product/edit/{product}', [ProductController::class, 'edit'])
->name('product.edit');
Route::delete('/product/{product}', [ProductController::class, 'destroy'])
->name('product.destroy');