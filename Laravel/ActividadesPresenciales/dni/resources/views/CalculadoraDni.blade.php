<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNI Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .calculator label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .calculator input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .calculator button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .calculator button:hover {
            background-color: #0056b3;
        }

        .alert {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>

    <div class="calculator">
        @if(session('error'))
            <div class="alert">
                {{ session('error') }}
            </div>
        @endif

        @if(session('result'))
            <div class="alert alert-success">
                {{ session('result') }}
            </div>
        @endif

        <form action="/CalculadoraDni/calculate" method="post">
            @csrf
            <label for="dni">Introduce tu DNI:</label>
            <input type="number" name="dni" required >

            <button type="submit">Calcular</button>
        </form>
    </div>

</body>
</html>
