<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[App\Http\Controllers\ProductController::class,'index']);

Route::get('/login',[App\Http\Controllers\UserController::class,'viewLogin']);

Route::post('register',[App\Http\Controllers\UserController::class,'login']);

Route::get('/details/{id}',[App\Http\Controllers\ProductController::class,'details']);
