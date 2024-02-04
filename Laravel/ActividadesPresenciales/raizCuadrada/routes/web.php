<?php

use App\Http\Controllers\RaizCuadradaController;
use Illuminate\Support\Facades\Route;

Route::get('/raizCuadradaResult', [RaizCuadradaController::class, 'index']);
Route::post('/raizCuadradaResult/calculate', [RaizCuadradaController::class, 'calculate']);
