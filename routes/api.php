<?php

use App\Http\Controllers\Api\Admin\Post\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::resource('posts', PostController::class);

Route::get('posts', [PostController::class, 'index'])->name('admin.posts');
Route::get('posts/{post}/show', [PostController::class, 'show'])->name('admin.posts.show');
Route::post('posts', [PostController::class, 'store'])->name('admin.posts.store');
Route::patch('posts/{post}/update', [PostController::class, 'update'])->name('admin.posts.update');
Route::delete('posts/{post}/delete', [PostController::class, 'destroy'])->name('admin.posts.delete');
