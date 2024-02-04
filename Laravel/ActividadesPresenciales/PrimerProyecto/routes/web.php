<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EjemploController;

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Ruta que devuelve un saludo
Route::get('/saludo', function () {
    return '¡Hola, mundo!';
});

// Ruta con un parámetro (id de usuario)
Route::get('/user/{id}', function (string $id) {
    return 'Este es el usuario con ID '. $id . '.';
});

// Ruta con un parámetro opcional (nombre de libro)
Route::get('/libro/{name?}', function (string $nombre = null) {
    return $nombre ? 'El nombre del libro es ' . $nombre . '.' : 'El nombre del libro no fue proporcionado.';
});

// Ruta con restricción de formato (solo dígitos)
Route::get('/item/{id}', function (string $id) {
    return 'El ID ' . $id . ' del ítem solo acepta dígitos.';
})->where('id', '[0-9]+');

// Ruta que redirige a otra ruta
Route::get('/hola', function () {
    return redirect('/saludo');
});

// Rutas que llaman a métodos en un controlador
Route::get('/inicio', [EjemploController::class, 'mostrarInicio']);
Route::get('/felicitar', [EjemploController::class, 'mostrarFelicitacion']);
Route::get('/cumplido/{nombre}', [EjemploController::class, 'mostrarCumplido']);
Route::get('/producto/ver/{id}', [EjemploController::class, 'mostrarProducto']);