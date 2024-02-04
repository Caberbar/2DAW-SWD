<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IvaController;

Route::get('/CalculadoraIva', [IvaController::class, 'index']);
Route::post('/CalculadoraIva/calculate', [IvaController::class, 'calculate']);
