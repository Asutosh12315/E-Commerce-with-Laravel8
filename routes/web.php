<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[App\Http\Controllers\ProductController::class,'index']);

Route::get('/login',[App\Http\Controllers\UserController::class,'viewLogin']);

Route::get('/logout',[App\Http\Controllers\UserController::class,'logOut']);

Route::post('register',[App\Http\Controllers\UserController::class,'login']);

Route::get('/details/{id}',[App\Http\Controllers\ProductController::class,'details']);

Route::get('/search',[App\Http\Controllers\ProductController::class,'search']);

Route::post('/add_to_cart',[App\Http\Controllers\ProductController::class,'addToCart']);

Route::get('/cartlist',[App\Http\Controllers\ProductController::class,'cartList']);

Route::get('/removecart/{id}',[App\Http\Controllers\ProductController::class,'removeCart']);

Route::get('/ordernow',[App\Http\Controllers\ProductController::class,'orderNow']);

Route::post('/orderplace',[App\Http\Controllers\ProductController::class,'orderPlace']);

Route::get('/myorder',[App\Http\Controllers\ProductController::class,'myOrder']);
