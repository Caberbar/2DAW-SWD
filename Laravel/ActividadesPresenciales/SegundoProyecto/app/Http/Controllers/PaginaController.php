<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    private $datos = [
        1 => ['marca' => 'Zephyr', 'modelo' => 'Astral', 'anio' => 1985, 'color' => 'Blanco'],
        2 => ['marca' => 'Venture', 'modelo' => 'Electra', 'anio' => 1982, 'color' => 'Rojo'],
        3 => ['marca' => 'Vortex', 'modelo' => 'Nova', 'anio' => 1989, 'color' => 'Negro'],
        4 => ['marca' => 'Neptune', 'modelo' => 'Orbit', 'anio' => 1987, 'color' => 'Azul']
    ];

    public function principal()
    {
        return view('paginas.inicio');
    }

    public function autos()
    {
        return view('paginas.transportes', ['coches' => $this->datos]);
    }

    public function formulario()
    {
        return view('paginas.asistencia-cliente');
    }

    public function informacion()
    {
        return view('paginas.nuestra-empresa');
    }
}