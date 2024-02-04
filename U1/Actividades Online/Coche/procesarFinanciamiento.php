<?php
// Verifica si la solicitud al servidor se realizó mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario de financiamiento
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $dinero_entrada = $_POST["entrada"];
    $num_cuotas = $_POST["num_cuotas"];
    $precio_final = $_POST["precio_final"];

    // Aquí puedes realizar operaciones adicionales con los datos según tus necesidades
    // Por ejemplo, almacenarlos en una base de datos, enviar correos electrónicos, etc.

    // Puedes añadir operaciones adicionales con los datos recolectados antes de mostrar el mensaje de confirmación.
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financing request sent</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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

        .confirmation-message {
            font-size: 18px;
            color: #009688;
            font-weight: bold;
        }

        .back-to-home {
            text-align: center;
            margin-top: 20px;
        }

        .back-to-home a {
            text-decoration: none;
            color: #009688;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h1>Financing request sent</h1>
        <p class="confirmation-message">
            Thanks, <?php echo $nombre; ?>, for your request!<br>
        </p>
        <p><strong>Telephone:</strong> <?php echo $telefono; ?></p>
        <p><strong>Address:</strong> <?php echo $direccion; ?></p>
        <p><strong>Input money:</strong> $<?php echo $dinero_entrada; ?></p>
        <p><strong>Number of quotas:</strong> <?php echo $num_cuotas; ?> quotes</p>
        <p><strong>Final car price:</strong> $<?php echo $precio_final; ?></p>

        <div class="back-to-home">
            <a href="index.html">Return to main page</a>
        </div>
    </div>
</body>
</html>

<?php
} else {
    // Redirigir a la página principal si no se accede por el método POST
    header("Location: index.html");
    exit();
}
?>
