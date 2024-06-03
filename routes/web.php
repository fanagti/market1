<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'index']);
Route::get('/detail/{product} ',[HomeController::class, 'detail']);
Route::get('/admin',[HomeController::class, 'admin']);


Route::get('/sesi/login',[SesiController::class, 'index']);
Route::post('/sesi/login',[SesiController::class, 'login']);
Route::get('/sesi/logout',[SesiController::class, 'logout']);

Route::get('/sesi/register',[SesiController::class, 'registerPage']);
Route::post('/sesi/register',[SesiController::class, 'register']);

Route::get('/cart',[CartController::class, 'index']);
Route::post('/cart',[CartController::class, 'cartStore']);
