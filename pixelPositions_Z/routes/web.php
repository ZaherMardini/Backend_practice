<?php

use App\Http\Controllers\jobController;
use App\Http\Controllers\registeredUserController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\tagController;
use Illuminate\Support\Facades\Route;

Route::get('/',[jobController::class,'index']);
Route::get('/job/create',[jobController::class,'create']);

Route::middleware('guest')->group(function(){
  Route::get('/register', [registeredUserController::class, 'create']);
  Route::post('/register', [registeredUserController::class, 'store']);
  Route::get('/login', [sessionController::class, 'create']);
  Route::post('/login', [sessionController::class, 'store']);
});

Route::middleware('auth')->group(function(){
  Route::delete('/logout', [sessionController::class, 'destroy']);
});

Route::get('/tags/{tag:name}', tagController::class);//route model binding here

Route::get('/search', searchController::class);
Route::view('/test', 'testView.testing');