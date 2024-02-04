<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaginaController;

Route::get('/', [PaginaController::class, 'principal'])->name('portada');
Route::get('/turismos', [PaginaController::class, 'autos'])->name('vehiculos');
Route::get('/atencion-cliente', [PaginaController::class, 'formulario'])->name('soporte');
Route::get('/acerca-de', [PaginaController::class, 'informacion'])->name('sobre-nosotros');