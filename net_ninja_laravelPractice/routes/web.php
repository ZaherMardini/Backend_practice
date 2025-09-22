<?php
use App\Http\Controllers\testController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


//====testController Routes====
Route::get('/index', action: [testController::class, "index"])->name("tests.index");
Route::get('/nigga_id/{id}', [testController::class, "show"])->name("tests.show");
Route::get('/form', [testController::class, "create"])->name("tests.create");
Route::post('/index', [testController::class, "store"])->name("tests.store");
Route::delete('/nigga_id/{id}', [testController::class, "destroy"])->name("tests.destroy");
//====End testController Routes====

//====AuthController Routes====
Route::get('/register', [AuthController::class, "showRegister"])->name("register.show");
Route::get('/login', [AuthController::class, "showLogin"])->name("login.show");
Route::post('/register', [AuthController::class, "register"])->name("register");
Route::post('/login', [AuthController::class, "login"])->name("login");
Route::post('/logout', [AuthController::class, "logout"])->name("logout");
//====End AuthController Routes====