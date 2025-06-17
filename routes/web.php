<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}/show', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/update', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts/{post}/delete', [PostController::class, 'destroy'])->name('posts.delete');

Route::get('/test', [TestController::class, 'superTestView'])->name('test');
