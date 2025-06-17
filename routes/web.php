<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}/show', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/update', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts/{post}/delete', [PostController::class, 'destroy'])->name('posts.delete');

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/store', [UserController::class, 'store'])->name('user.store');
Route::get('/users/{user}/show', [UserController::class, 'show'])->name('user.show');
Route::get('/users/{user}/update', [UserController::class, 'update'])->name('user.update');
Route::get('/users/{user}/delete', [UserController::class, 'delete'])->name('user.delete');

Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles');
Route::get('/profiles/store', [ProfileController::class, 'store'])->name('profiles.store');
Route::get('/profiles/{profile}/show', [ProfileController::class, 'show'])->name('profiles.show');
Route::get('/profiles/{profile}/update', [ProfileController::class, 'update'])->name('profiles.update');
Route::get('/profiles/{profile}/delete', [ProfileController::class, 'delete'])->name('profiles.delete');

Route::get('/comments', [CommentController::class, 'index'])->name('comments');
Route::get('/comments/store', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments/{comment}/show', [CommentController::class, 'show'])->name('comments.show');
Route::get('/comments/{comment}/update', [CommentController::class, 'update'])->name('comments.update');
Route::get('/comments/{comment}/delete', [CommentController::class, 'delete'])->name('comments.delete');
