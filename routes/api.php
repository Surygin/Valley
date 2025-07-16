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
Route::apiResource('chats', ChatController::class);
Route::apiResource('messages', MessageController::class);
