<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    private $productos = [
        1 => ['nombre' => 'Libro de cocina', 'descripcion' => 'Contiene más de 200 recetas.'],
        2 => ['nombre' => 'Guitarra eléctrica', 'descripcion' => 'Incluye estuche.'],
        3 => ['nombre' => 'Ordenador portátil', 'descripcion' => '15.6 pulgadas, 16 GB RAM, 500 GB SSD.']
    ];

    // Muestra la página de inicio
    public function mostrarInicio()
    {
        return view('welcome');
    }

    // Muestra una felicitación
    public function mostrarFelicitacion()
    {
        return '¡Enhorabuena!';
    }

    // Muestra un cumplido personalizado
    public function mostrarCumplido(string $nombre)
    {
        return '¡Eres una persona maravillosa, ' . $nombre . '!';
    }

    // Muestra los detalles de un producto
    public function mostrarProducto(string $id)
    {
        if (isset($this->productos[$id])) {
            return 'Producto: ' . $this->productos[$id]['nombre'] . '. Descripción: ' . $this->productos[$id]['descripcion'];
        } else {
            return 'El producto con ID ' . $id . ' no existe.';
        }
    }
}