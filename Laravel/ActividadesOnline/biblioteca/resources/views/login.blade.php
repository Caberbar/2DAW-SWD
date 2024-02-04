<!DOCTYPE html>
<html>

<head>
    <title>Iniciar sesión</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Iniciar sesión</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="nombreusu">Usuario</label>
                <input id="nombreusu" type="text" name="nombreusu" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" required>
            </div>

            @error('nombreusu') <span class="error">Incorrect credentials</span> @enderror
            @error('password') <span class="error">Incorrect credentials</span> @enderror
            <br>

            <div class="form-group">
                <button type="submit">Iniciar sesión</button>
            </div>
        </form>
    </div>
</body>

</html>