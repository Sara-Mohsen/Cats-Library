<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cats', [CatsController::class, 'index'])->name('cats.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cats/create', [CatsController::class, 'create'])->name('cats.create');
    Route::post('/cats', [CatsController::class, 'store'])->name('cats.store');
    Route::put('/cats/{name}', [CatsController::class, 'update'])->name('cats.update');
    Route::get('/cats/{name}/edit', [CatsController::class, 'edit'])->name('cats.edit');
    Route::delete('/cats/{name}', [CatsController::class, 'destroy'])->name('cats.destroy');
});

Route::get('/cats/{name}', [CatsController::class, 'show'])->name('cats.show');

require __DIR__ . '/auth.php';
