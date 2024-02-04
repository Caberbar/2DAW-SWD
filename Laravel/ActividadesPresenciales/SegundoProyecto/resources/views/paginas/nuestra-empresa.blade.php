@extends('plantillas.base')

@section('titulo', 'Quiénes somos')

@section('contenido')

    <nav>
      <a href="{{ route('portada') }}">Inicio</a> |
      <a href="{{ route('vehiculos') }}">Coches</a> |
      <a href="{{ route('soporte') }}">Escríbenos</a> |
      Quiénes somos
    </nav>

    <h2>Quiénes somos</h2>

    <p>Página que informa sobre en qué consiste el sitio web.</p>

@endsection