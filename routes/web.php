<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'login']);
Route::get('/', [AuthController::class, 'home']);

