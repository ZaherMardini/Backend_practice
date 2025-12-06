<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->prefix('v1')->group(function(){
  Route::post('/register', [AuthController::class, 'register']);
  Route::post('/login', [AuthController::class, 'login']);
  Route::get('/products', [ProductController::class, 'index']);
  Route::get('/products/{id}', [ProductController::class, 'show']);
});

Route::middleware('auth:sanctum')->prefix('v1')->group(function(){
  // Route::post('/products/{product}', [ProductController::class, 'store']);
  Route::post('/products/{product}', [ProductController::class, 'update']);
  // Route::put('/products/{id}/categories', [ProductController::class, '']);
  Route::delete('/products/{id}', [ProductController::class, 'destroy']);
});