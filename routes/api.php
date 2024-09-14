<?php

use App\Http\Controllers\UserApiController;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserApiController::class, 'index']);
Route::get('/users/{user}', [UserApiController::class, 'show']);
Route::post('/users', [UserApiController::class, 'store']);
Route::put('/users/{user}', [UserApiController::class,'update']);
Route::delete('/users/{user}', [UserApiController::class,'destroy']);
