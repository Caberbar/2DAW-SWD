@extends('home')

@section('content')
    <h2>Crear Nuevo Autor</h2>

    

    <form action="{{ route('autores.store') }}" method="post">
        @csrf

        @error('apellidos') <span class="error">The field must contain 3 or more letters.</span> @enderror
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" minlength="3" required>
        
        @error('nombre') <span class="error">The field must contain 3 or more letters.</span> @enderror
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required  minlength="3">
        
        @error('nacionalidad') <span class="error">The field must contain 3 or more letters.</span> @enderror
        <label for="nacionalidad">Nacionalidad:</label>
        <input type="text" name="nacionalidad" minlength="3" required>
        

        @error('sexo') <span class="error">Enter 'F' or 'M' for the gender field.</span> @enderror
        <label for="sexo">Sexo:</label>
        <input type="text" name="sexo" pattern="[F|M]" required>
        
        @error('edad') <span class="error">Must be over 18 years old</span> @enderror
        <label for="edad">Edad:</label>
        <input type="number" name="edad" required min="18" max="99">
        

        <button type="submit">Guardar</button>
    </form>
@endsection