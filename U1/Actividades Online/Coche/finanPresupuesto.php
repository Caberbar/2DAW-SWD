<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Financiamiento</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .result-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            margin: 8px 0;
        }

        label {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #6096ba;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #274c77;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h1>Financing Details</h1>
        <p><strong>Final Car Price:</strong> $<?php echo $_GET["precio_final"]; ?></p>

        <form action="procesarFinanciamiento.php" method="post">
            <label for="nombre">Name:</label>
            <input type="text" name="nombre" required>

            <label for="telefono">Telephone:</label>
            <input type="tel" name="telefono" required>

            <label for="direccion">Address:</label>
            <input type="text" name="direccion" required>

            <label for="entrada">Entry Money:</label>
            <select name="entrada" required>
                <option value="5000">5000</option>
                <option value="10000">10000</option>
                <option value="15000">15000</option>
            </select>

            <label for="num_cuotas">Number of Installments:</label>
            <select name="num_cuotas" required>
                <option value="2">2 cuotas</option>
                <option value="5">5 cuotas</option>
                <option value="8">8 cuotas</option>
                <option value="12">12 cuotas</option>
                <option value="24">24 cuotas</option>
            </select>

            <input type="hidden" name="precio_final" value="<?php echo $_GET["precio_final"]; ?>">
            <input type="submit" value="Enviar Solicitud de Financiamiento">
        </form>
    </div>
</body>
</html>


