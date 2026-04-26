<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login']);
Route::post('/dashboard', [PageController::class, 'dashboard']);
Route::get('/profile/{username}', [PageController::class, 'profile']);
Route::get('/pengelolaan/{username}', [PageController::class, 'pengelolaan']);
Route::get('/about/{username?}', [PageController::class, 'about']);