<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[App\Http\Controllers\ProductController::class,'index']);

Route::get('/login',[App\Http\Controllers\UserController::class,'viewLogin']);

Route::get('/logout',[App\Http\Controllers\UserController::class,'logOut']);

Route::post('register',[App\Http\Controllers\UserController::class,'login']);

Route::get('/details/{id}',[App\Http\Controllers\ProductController::class,'details']);

Route::get('/search',[App\Http\Controllers\ProductController::class,'search']);

Route::post('/add_to_cart',[App\Http\Controllers\ProductController::class,'addToCart']);
