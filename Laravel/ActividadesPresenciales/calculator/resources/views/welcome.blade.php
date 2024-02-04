<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
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
        <label for="num1">Number 1:</label>
        <input type="text" name="num1" required>
        <br>

        <label for="num2">Number 2:</label>
        <input type="text" name="num2" required>
        <br>

        <label for="operation">Operation:</label>
        <select name="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <br>

        <button type="submit">Calculate</button>
    </form>

</body>
</html>