<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrimoParController;

Route::get('/PrimoParResult', [PrimoParController::class, 'index']);
Route::post('/PrimoParResult/calcular', [PrimoParController::class, 'calcular']);

