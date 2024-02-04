<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        
    </style>
</head>
<body>

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    @if(session('result'))
        <p>Result: {{ session('result') }}</p>
    @endif

    <form action="/calculate" method="post">
        @csrf
        <label for="num1">Numero 1:</label>
        <input type="text" name="num1" required>
        <br>

        <label for="num2">Numero 2:</label>
        <input type="text" name="num2" required>
        <br>

        <label for="operation">Operación:</label>
        <select name="operation" required>
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multiplicacion">Multiplicar</option>
            <option value="division">Dividir</option>
        </select>
        <br>

        <button type="submit">Calcular</button>
    </form>

</body>
</html>
