@extends('home')

@section('content')
    <h2>Editar Usuario</h2>

    <form action="{{ route('usuarios.update', $usuario->id_usuario) }}" method="POST">
        @csrf
        @method('PUT')

        @error('nombreusuario') <span class="error">The field must contain 3 or more letters.</span> @enderror
        <label for="nombreusuario">Nombre y apellidos:</label>
        <input type="text" name="nombreusuario" minlength="3" value="{{ $usuario->nombreusuario }}" required>

        @error('password') <span class="error">The field must contain 3 or more characters.</span> @enderror
        <label for="password">Contraseña:</label>
        <input type="password" name="password" minlength="3" value="{{ $usuario->password }}" required>

        @error('telefono') <span class="error">The field must contain 3 or more numbers.</span> @enderror
        <label for="telefono">Telefono:</label>
        <input type="number" name="telefono" minlength="9" value="{{ $usuario->telefono }}" required>

        @error('fechentrega') <span class="error">Enter a valid date</span> @enderror
        <label for="fechentrega">Fecha de entrega:</label>
        <input type="date" name="fechentrega" value="{{ $usuario->fechentrega }}" required>


        <button type="submit">Guardar cambios</button>
    </form>
@endsection
