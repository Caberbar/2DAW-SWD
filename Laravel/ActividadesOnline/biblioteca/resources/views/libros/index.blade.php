@extends('home')

@section('content')
<h2><span>Lista de Libros</span></h2>

<a href="{{ route('libros.create') }}" class="btn-create btn-create2">Crear Libro</a>
<div class="tabla">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Categoria</th>
                <th>Autor</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
            <tr>
                <td>{{ $libro->id_libro }}</td>
                <td>{{ $libro->titulo }}</td>
                <td>{{ $libro->categoria }}</td>
                <td>{{ $libro->autor['nombre'] }} {{ $libro->autor['apellidos'] }}</td>
                <td>{{ $libro->descripcion }}</td>
                <td>{{ $libro->precio }}</td>
                <td>
                    <a href="{{ route('libros.edit', $libro->id_libro) }}" class="btn-edit">Editar</a>
                    <form action="{{ route('libros.destroy', $libro->id_libro) }}" method="POST">
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