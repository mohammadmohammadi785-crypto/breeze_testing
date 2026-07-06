<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get("posts", [PostController::class, "index"]);
    Route::delete('posts/{id}', [PostController::class, "destroy"]);
});

Route::get('user', [UserController::class, "index"])->middleware('can:teacher-auth');


// Route::get("teacher", [TeacherController::class, "index"])->middleware(TeacherMiddleware::class);

require __DIR__.'/auth.php';
