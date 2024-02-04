<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/autores.css') }}">
</head>

<body>
    <header>
        <h1>Biblioteca</h1>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Cerrar sesión</button>
        </form>
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('autores.index') }}">Autores</a></li>
            <li><a href="{{ route('libros.index') }}">Libros</a></li>
            <li><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
            <li><a href="{{ route('alquileres.index') }}">Alquileres</a></li>
        </ul>
    </nav>

    <div>
        @yield('content')
    </div>
</body>

</html>