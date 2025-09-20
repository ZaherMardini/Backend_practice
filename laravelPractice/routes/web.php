<?php
use App\Http\Controllers\jobController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerUserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'first');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get  ('/register', [registerUserController::class, 'create']);
Route::post ('/register', [registerUserController::class, 'store']);
Route::get  ('/login',    [loginController::class, 'create'])->name('login');
Route::post ('/login',    [loginController::class, 'store']);
Route::post ('/logout',   [loginController::class, 'destroy']);

Route::controller(jobController::class)->group(function(){
    Route::get('/jobs', action:'index');
    Route::view('/jobs/create', 'jobs.create');
    Route::post('/jobs/create','store');
    Route::get('/jobs/{job}/edit','edit')->middleware('auth')->can('edit-job', 'job');
    Route::patch('/jobs/{job}', action:'update');
    Route::delete('/jobs/{job}', action:'destroy')->middleware('auth');
    Route::get('/jobs/{job}','show')->middleware('auth');
});
