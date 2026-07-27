<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CatController;



Route::get('/cats', [CatController::class, 'index']);

Route::get('/cats/{cat}', [CatController::class, 'show']);

Route::post('/cats', [CatController::class, 'store']);

Route::put('/cats/{cat}', [CatController::class, 'update']);

Route::delete('/cats/{cat}', [CatController::class, 'destroy']);
