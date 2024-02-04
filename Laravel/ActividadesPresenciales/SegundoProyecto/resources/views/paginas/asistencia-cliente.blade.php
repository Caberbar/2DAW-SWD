@extends('plantillas.base')

@section('titulo', 'Escríbenos')

@section('contenido')

    <nav>
      <a href="{{ route('portada') }}">Inicio</a> |
      <a href="{{ route('vehiculos') }}">Coches</a> |
      Escríbenos |
      <a href="{{ route('sobre-nosotros') }}">Quiénes somos</a>
    </nav>

    <h2>Escríbenos</h2>

    <p>Página para comunicarse con la empresa.</p>

@endsection