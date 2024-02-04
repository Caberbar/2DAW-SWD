@extends('plantillas.base')

@section('titulo', 'Inicio')

@section('contenido')

    <nav>
      Inicio |
      <a href="{{ route('vehiculos') }}">Coches</a> |
      <a href="{{ route('soporte') }}">Escríbenos</a> |
      <a href="{{ route('sobre-nosotros') }}">Quiénes somos</a>
    </nav>

    <h2>Inicio</h2>

    <p>Bienvenido a una web de ejemplo de una lista de coches.</p>

@endsection