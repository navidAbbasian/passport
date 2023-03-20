<?php

use App\Http\Controllers\API\CustomerController;
use Illuminate\Http\Request;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RegisterController;
use Illuminate\Support\Facades\Route;

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
     
Route::middleware('auth:api')->group( function () {
    Route::resource('products', ProductController::class);
    Route::controller(CustomerController::class)->group(function(){
        Route::post('customer', 'store');
        Route::get('customer', 'index');
    });
});