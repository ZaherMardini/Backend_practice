<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicProfileController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\TestingController;
use Illuminate\Support\Facades\Route;

Route::get('/test', [TestingController::class, 'test']);
Route::get('/@{user:name}', [PublicProfileController::class, 'show'])->name('profile.show');

Route::middleware('auth')->middleware(['auth', 'verified'])->group(function(){
    Route::get('/', [PostController::class, 'index'])->name('dashboard');
    Route::get('/post/create', [PostController::class, 'create']);
    Route::post('/post/create', [PostController::class, 'store']);

    Route::post('/@{user:name}/follow', [FollowController::class, 'store'])->name('follow');
    
    Route::get('/@{user:name}/{post:slug}', [PostController::class, 'show'])->name('post.show');
    
    Route::get('/@{user:name}/{post:slug}/comments', [CommentController::class, 'index'])->name('comment.show');

  });
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
