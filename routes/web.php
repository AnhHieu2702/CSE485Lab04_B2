<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderDetailController;


Route::get('/', function () {
    return view('layouts.app');
});
Route::resource('products', ProductController::class);
Route::resource('order_details', OrderDetailController::class);
