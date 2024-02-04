
@extends('home')

@section('content')
<h2>Editar Alquiler</h2>

<form action="{{ route('alquileres.update', $alquiler->alquiler_id) }}" method="POST">
    @csrf
    @method('PUT')

    @error('libro_id') <span class="error">Enter a valid book.</span> @enderror
    <label for="libro_id">Libro:</label>
    <select name="libro_id">
        <option value="">Selecciona un Libro</option>
        @foreach ($libros as $libro)
        <option value="{{ $libro->id_libro }}" {{ $libro->id_libro == $alquiler->libro_id ? 'selected' : '' }}>{{ $libro->titulo }}</option>
        @endforeach
    </select>

    @error('usuario_id') <span class="error">Enter a valid user.</span> @enderror
    <label for="usuario_id">Usuario:</label>
    <select name="usuario_id">
        <option value="">Selecciona un usuario</option>
        @foreach ($usuarios as $usuario)
        <option value="{{ $usuario->id_usuario }}" {{ $usuario->id_usuario == $alquiler->usuario_id ? 'selected' : '' }}>{{ $usuario->nombreusuario }}</option>
        @endforeach
    </select>

    @error('fechprestamo') <span class="error">Enter a valid date, must be less than the delivery date.</span> @enderror
    <label for="fechprestamo">Fecha de recogida:</label>
    <input type="date" name="fechprestamo" value="{{ $alquiler->fechprestamo }}" required>

    @error('fechdevolucion') <span class="error">Enter a valid date, must be greater than the collection date.</span> @enderror
    <label for="fechdevolucion">Fecha de entrega:</label>
    <input type="date" name="fechdevolucion" value="{{ $alquiler->fechdevolucion }}" required>

    <button type="submit">Guardar cambios</button>
</form>
@endsection