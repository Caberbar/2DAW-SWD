<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
  <head>
    <meta charset="utf-8" />
    <title>@yield('titulo') - Nombre de la empresa</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}" />
  </head>
  <body>
    <h1>Nombre de la empresa</h1>

    @yield('contenido')

    <footer>Sitio web de elaboración propia.</footer>

  </body>
</html>