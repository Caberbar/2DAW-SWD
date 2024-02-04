@extends('home')

@section('content')
<h2><span>Lista de Alquileres<span></h2>

<a href="{{ route('alquileres.create') }}" class="btn-create">Crear Alquiler</a>
<div class="tabla">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Libro</th>
                <th>Fecha de Alquiler</th>
                <th>Fecha de Devolución</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alquileres as $alquiler)
            <tr>
                <td>{{ $alquiler->alquiler_id }}</td>
                <td>{{ $alquiler->usuario->nombreusuario}}</td>
                <td>{{ $alquiler->libro->titulo }}</td>
                <td>{{ $alquiler->fechprestamo }}</td>
                <td>{{ $alquiler->fechdevolucion }}</td>
                <td>
                    <a href="{{ route('alquileres.edit', $alquiler->alquiler_id) }}" class="btn-edit">Editar</a>
                    <form action="{{ route('alquileres.destroy', $alquiler->alquiler_id) }}" method="POST">
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