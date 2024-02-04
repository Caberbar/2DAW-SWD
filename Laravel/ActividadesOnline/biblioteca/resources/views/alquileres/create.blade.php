@extends('home')

@section('content')
<h2>Crear Nuevo Alquiler</h2>

<form action="{{ route('alquileres.store') }}" method="post">
    @csrf

    @error('libro_id') <span class="error">Enter a valid book.</span> @enderror
    <label for="libro_id">Libro:</label>
    <select name="libro_id" required>
        <option value="libro_id">Selecciona un Libro</option>
        @foreach ($libros as $libro)
        <option value="{{ $libro->id_libro }}">{{ $libro->titulo }}</option>
        @endforeach
    </select>

    @error('usuario_id') <span class="error">Enter a valid user.</span> @enderror
    <label for="usuario_id">Usuario:</label>
    <select name="usuario_id" required>
        <option value="usuario_id">Selecciona un usuario</option>
        @foreach ($usuarios as $usuario)
        <option value="{{ $usuario->id_usuario }}">{{ $usuario->nombreusuario }}</option>
        @endforeach
    </select>

    @error('fechprestamo') <span class="error">Enter a valid date, must be less than the delivery date.</span> @enderror
    <label for="fechprestamo">Fecha de recogida:</label>
    <input type="date" name="fechprestamo" required>

    @error('fechdevolucion') <span class="error">Enter a valid date, must be greater than the collection date.</span> @enderror
    <label for="fechdevolucion">Fecha de entrega:</label>
    <input type="date" name="fechdevolucion" required>

    <button type="submit">Guardar</button>
</form>
@endsection