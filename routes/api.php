<?php

use App\Http\Controllers\Api\Admin\Post\PostController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ChatController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::resource('posts', PostController::class);

Route::apiResource('posts', PostController::class);
//Route::apiResource('categories', CategoryController::class);
//Route::apiResource('tags', TagController::class);

//Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
//Route::get('/categories/{category}/show', [CategoryController::class, 'show'])->name('categories.show');
//Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
//Route::patch('/categories/{category}/update', [CategoryController::class, 'update'])->name('categories.update');
//Route::delete('categories/{category}/delete', [CategoryController::class, 'destroy'])->name('categories.delete');

//Route::get('/tags', [TagController::class, 'index'])->name('tags');
//Route::get('/tags/{tag}/show', [TagController::class, 'show'])->name('tags.show');
//Route::post('/tags', [TagController::class, 'store'])->name('tags.store');
//Route::patch('/tags/{tag}/update', [TagController::class, 'update'])->name('tags.update');
//Route::delete('tags/{tag}/delete', [TagController::class, 'destroy'])->name('tags.delete');

//Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles');
//Route::get('/profiles/{profile}/show', [ProfileController::class, 'show'])->name('profiles.show');
//Route::post('/profiles', [ProfileController::class, 'store'])->name('profiles.store');
//Route::patch('/profiles/{profile}/update', [ProfileController::class, 'update'])->name('profiles.update');
//Route::delete('profiles/{profile}/delete', [ProfileController::class, 'destroy'])->name('profiles.delete');

//Route::get('/roles', [RoleController::class, 'index'])->name('roles');
//Route::get('/roles/{role}/show', [RoleController::class, 'show'])->name('roles.show');
//Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
//Route::patch('/roles/{role}/update', [RoleController::class, 'update'])->name('roles.update');
//Route::delete('roles/{role}/delete', [RoleController::class, 'destroy'])->name('roles.delete');

//Route::get('/comments', [CommentController::class, 'index'])->name('comments');
//Route::get('/comments/{comment}/show', [CommentController::class, 'show'])->name('comments.show');
//Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
//Route::patch('/comments/{comment}/update', [CommentController::class, 'update'])->name('comments.update');
//Route::delete('comments/{comment}/delete', [CommentController::class, 'destroy'])->name('comments.delete');

//Route::get('/chats', [ChatController::class, 'index'])->name('chats');
//Route::get('/chats/{chat}/show', [ChatController::class, 'show'])->name('chats.show');
//Route::post('/chats', [ChatController::class, 'store'])->name('chats.store');
//Route::patch('/chats/{chat}/update', [ChatController::class, 'update'])->name('chats.update');
//Route::delete('chats/{chat}/delete', [ChatController::class, 'destroy'])->name('chats.delete');

//Route::get('/messages', [MessageController::class, 'index'])->name('messages');
//Route::get('/messages/{message}/show', [MessageController::class, 'show'])->name('messages.show');
//Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
//Route::patch('/messages/{message}/update', [MessageController::class, 'update'])->name('messages.update');
//Route::delete('messages/{message}/delete', [MessageController::class, 'destroy'])->name('messages.delete');
