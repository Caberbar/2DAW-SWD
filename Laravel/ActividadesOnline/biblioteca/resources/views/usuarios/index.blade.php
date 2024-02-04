@extends('home')

@section('content')
<h2><span>Lista de Usuarios</span></h2>

<a href="{{ route('usuarios.create') }}" class="btn-create">Crear Usuario</a>
<div class="tabla">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Contraseña</th>
                <th>Teléfono</th>
                <th>Fecha de entrega</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id_usuario }}</td>
                <td>{{ $usuario->nombreusuario }}</td>
                <td>{{ $usuario->password }}</td>
                <td>{{ $usuario->telefono }}</td>
                <td>{{ $usuario->fechentrega }}</td>
                <td>
                    <a href="{{ route('usuarios.edit', $usuario->id_usuario) }}" class="btn-edit">Editar</a>
                    <form action="{{ route('usuarios.destroy', $usuario->id_usuario) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this autor?')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection