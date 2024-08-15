<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('product');
});

//getting data from database
Route::get('/products', [App\Http\Controllers\ProductController::class,'Product']);
Route::get('/create-product', [App\Http\Controllers\ProductController::class,'createProduct']);
Route::get('/view-products', [App\Http\Controllers\ProductController::class, 'showProducts']);


//posting the product on the database
Route::post('/store-product', [App\Http\Controllers\ProductController::class,'storeProduct']);