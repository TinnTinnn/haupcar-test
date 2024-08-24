<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('cars.index');
});

Route::resource('cars', AppController::class);
