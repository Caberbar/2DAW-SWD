@extends('home')

@section('content')
    <h2>Crear Nuevo Usuario</h2>

    <form action="{{ route('usuarios.store') }}" method="post">
        @csrf

        @error('nombreusuario') <span class="error">The field must contain 3 or more letters.</span> @enderror
        <label for="nombreusuario">Nombre:</label>
        <input type="text" minlength="3" name="nombreusuario" required>

        @error('password') <span class="error">The field must contain 3 or more characters.</span> @enderror
        <label for="password">Contraseña:</label>
        <input type="password" minlength="3" name="password" required>

        @error('telefono') <span class="error">The field must contain 3 or more numbers.</span> @enderror
        <label for="telefono">Telefono:</label>
        <input type="number" minlength="9" name="telefono" required>

        @error('fechentrega') <span class="error">Enter a valid date</span> @enderror
        <label for="fechentrega">Fecha de entrega:</label>
        <input type="date" name="fechentrega" required>

        <button type="submit">Guardar</button>
    </form>
@endsection