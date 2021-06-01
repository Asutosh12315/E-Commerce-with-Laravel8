<?php

use Illuminate\Support\Facades\Route;



Route::get('/login',[App\Http\Controllers\UserController::class,'viewLogin']);

Route::post('register',[App\Http\Controllers\UserController::class,'login']);

Route::get('/product_page',[App\Http\Controllers\ProductController::class,'index']);