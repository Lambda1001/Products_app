<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layouts.welcome');
});

//getting data from database
Route::get('/products', [App\Http\Controllers\ProductController::class,'Product']);
Route::get('/create-product', [App\Http\Controllers\ProductController::class,'createProduct']);
Route::get('/view-products', [App\Http\Controllers\ProductController::class, 'showProducts']);
Route::get('/about', [App\Http\Controllers\ProductController::class, 'about']);

//posting the product on the database
Route::post('/store-product', [App\Http\Controllers\ProductController::class,'storeProduct']);