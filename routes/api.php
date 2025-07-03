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

Route::apiResource('posts', PostController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('tags', TagController::class);
Route::apiResource('roles', RoleController::class);
Route::apiResource('profiles', ProfileController::class);
Route::apiResource('comments', CommentController::class);

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
