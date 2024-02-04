@extends('plantillas.base')

@section('titulo', 'Coches')

@section('contenido')

    <nav>
      <a href="{{ route('portada') }}">Inicio</a> |
      Coches |
      <a href="{{ route('soporte') }}">Escríbenos</a> |
      <a href="{{ route('sobre-nosotros') }}">Quiénes somos</a>
    </nav>

    <h2>Coches</h2>

    <p>Página que muestra sobre los coches disponibles.</p>

    @foreach($coches as $coche)
      <h3>{{ $coche['marca'] }} - {{ $coche['modelo'] }}</h3>

      <p>Año: {{ $coche['anio'] }}.</p>

      <p>Color: {{ $coche['color'] }}.</p>
    @endforeach
@endsection