@extends('home')

@section('content')
<h2>Editar Libro</h2>

<form action="{{ route('libros.update', $libro->id_libro) }}" method="POST">
    @csrf
    @method('PUT')

    @error('titulo') <span class="error">Enter a valid title.</span> @enderror
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" minlength="3" value="{{ $libro->titulo }}" required>

    @error('categoria') <span class="error">Enter a valid category.</span> @enderror
    <label for="categoria">Categoria:</label>
    <input type="text" name="categoria" minlength="3" value="{{ $libro->categoria }}" required>

    @error('autor_id') <span class="error">Enter a valid author.</span> @enderror
    <label for="autor_id">Autor:</label>
    <select name="autor_id" value="Autor" required>Selecciona un autor</option>
        @foreach ($autores as $autor)
        <option value="{{ $autor->id }}">{{ $autor->nombre }} {{ $autor->apellidos }}</option>
        @endforeach
    </select>

    @error('descripcion') <span class="error">Enter a valid description.</span> @enderror
    <label for="descripcion">Descripcion:</label>
    <input type="text" name="descripcion" minlength="3" value="{{ $libro->descripcion }}" required>

    @error('precio') <span class="error">Enter a valid price, more than or equal to 1.</span> @enderror
    <label for="precio">Precio:</label>
    <input type="text" name="precio" step=".05" value="{{ $libro->precio }}" required>

    <button type="submit">Actualizar</button>
</form>
@endsection