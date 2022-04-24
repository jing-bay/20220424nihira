<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [UserController::class, 'index']) ;
Route::post('/todo/create', [UserController::class, 'create']) ;
Route::post('/todo/update', [UserController::class, 'update']) ;
Route::post('/todo/delete', [UserController::class, 'delete']) ;
