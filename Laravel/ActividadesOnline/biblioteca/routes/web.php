<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\HomeController;
//Route::get('/', [HomeController::class, 'index']);


use App\Http\Controllers\AutorController;
Route::resource('autores', AutorController::class);
Route::delete('/autores/{autor}', 'AutorController@destroy')->name('autores.destroy');
Route::put('/autores/{id}/edit', [AutorController::class, 'update'])->name('autores.update');


use App\Http\Controllers\LibroController;
Route::resource('libros', LibroController::class);

use App\Http\Controllers\UsuarioController;
Route::resource('usuarios', UsuarioController::class);


use App\Http\Controllers\AlquilerController;
Route::resource('alquileres', AlquilerController::class);



use App\Http\Controllers\PassUsuarioController;
Route::get('/', [PassUsuarioController::class, 'showLoginForm'])->name('login');
Route::post('/', [PassUsuarioController::class, 'login']);
Route::post('logout', [PassUsuarioController::class, 'logout'])->name('logout');

