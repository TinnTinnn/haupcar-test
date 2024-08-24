<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/cars', [AppController::class, 'index'])->name('cars.index');

Route::get('/cars', [AppController::class, 'index'])->name('cars.index');
Route::view('/cars/create', 'cars.create')->name('cars.create');
Route::get('cars/{car}/edit', [AppController::class, 'edit'])->name('cars.edit');
Route::get('cars/{car}', [AppController::class, 'show'])->name('cars.show');
Route::post('/cars', [AppController::class, 'store'])->name('cars.store');
Route::put('/cars/{car}', [AppController::class, 'update'])->name('cars.update');
Route::delete('/cars/{car}', [AppController::class, 'destroy'])->name('cars.destroy');
Route::put('cars/{car}/toggle-complete', [AppController::class, 'toggleComplete'])->name('cars.toggle-complete');

// ฟังก์ชัน fallback
Route::fallback(function () {
    return 'Still got somewhere!';
});
