<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DniController;

Route::get('/CalculadoraDni', [DniController::class, 'index']);
Route::post('/CalculadoraDni/calculate', [DniController::class, 'calculate']);

