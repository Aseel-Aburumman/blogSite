<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\PostPublicController;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


// Public routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/', [PostPublicController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostPublicController::class, 'show'])->name('posts.show');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::get('admin/posts', [PostController::class, 'index'])->name('admin.posts.index');
        Route::get('admin/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
        Route::get('admin/posts/{post}', [PostController::class, 'show'])->name('admin.posts.show');
        Route::post('admin/posts', [PostController::class, 'store'])->name('admin.posts.store');
        Route::get('admin/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
        Route::put('admin/posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
        Route::delete('admin/posts/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');
    });

    // Routes for authenticated users (comments)
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    // web.php
    Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
});
