<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LokasiController;

Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::put('/posts/{id}', [PostController::class, 'update']);
Route::delete('/posts/{id}', [PostController::class, 'destroy']);

Route::get('/lokasis', [LokasiController::class, 'index']);
Route::post('/lokasis', [LokasiController::class, 'store']);
Route::get('/lokasis/{id}', [LokasiController::class, 'show']);
Route::put('/lokasis/{id}', [LokasiController::class, 'update']);
Route::delete('/lokasis/{id}', [LokasiController::class, 'destroy']);
