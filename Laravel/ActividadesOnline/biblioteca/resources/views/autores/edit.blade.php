@extends('home')

@section('content')
    <h2>Editar Autor</h2>

    <form action="{{ route('autores.update', $autor->id) }}" method="POST">
        @csrf
        @method('PUT')

        @error('apellidos') <span class="error">The field must contain 3 or more letters.</span> @enderror
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" minlength="3" value="{{ old('apellidos', $autor->apellidos) }}" required>

        @error('nombre') <span class="error">The field must contain 3 or more letters.</span> @enderror
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" minlength="3" value="{{ old('nombre', $autor->nombre) }}" required>

        @error('nacionalidad') <span class="error">The field must contain 3 or more letters.</span> @enderror
        <label for="nacionalidad">Nacionalidad:</label>
        <input type="text" name="nacionalidad" minlength="3" value="{{ old('nacionalidad', $autor->nacionalidad) }}" required>

        @error('sexo') <span class="error">Enter 'F' or 'M' for the gender field.</span> @enderror
        <label for="sexo">Sexo:</label>
        <input type="text" name="sexo" pattern="[F|M]" value="{{ old('sexo', $autor->sexo) }}" required>

        @error('edad') <span class="error">Must be over 18 years old</span> @enderror
        <label for="edad">Edad:</label>
        <input type="text" name="edad" min="18" max="99" value="{{ old('edad', $autor->edad) }}" required>

        <button type="submit">Actualizar Autor</button>
    </form>
@endsection
