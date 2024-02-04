@extends('home')

@section('content')
<h2><span>Lista de Autores</span></h2>

<a href="{{ route('autores.create') }}" class="btn-create btn-create2">Crear Autor</a>
<div class="tabla">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Apellidos</th>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($autores as $autor)
            <tr>
                <td>{{ $autor->id }}</td>
                <td>{{ $autor->apellidos }}</td>
                <td>{{ $autor->nombre }}</td>
                <td>{{ $autor->nacionalidad }}</td>
                <td>{{ $autor->sexo }}</td>
                <td>{{ $autor->edad }}</td>
                <td>
                    <a href="{{ route('autores.edit', $autor->id) }}" class="btn-edit">Editar</a>
                    <form action="{{ route('autores.destroy', $autor->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this autor?')" class="btn-delete">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection