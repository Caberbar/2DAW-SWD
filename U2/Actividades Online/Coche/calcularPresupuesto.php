<?php
// Iniciar o reanudar la sesión
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    // Si no está autenticado, redirigir al formulario de inicio de sesión
    header("Location: login.php");
    exit();
}

// Verifica si la solicitud al servidor se realizó mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $modelo = $_POST["modelo"];
    $color = $_POST["color"];
    $tipo = $_POST["tipo"];
    $puertas = $_POST["puertas"];
    $cv = $_POST["cv"];
    $tipo_motor = $_POST["tipo_motor"];
    
    // Verifica si se seleccionó financiamiento, si no, establece el valor predeterminado a "no"
    $financiamiento = isset($_POST["financiamiento"]) ? $_POST["financiamiento"] : "no";

    // Realizar cálculos del presupuesto
    $precio_base = 10000;  // Precio base del auto (ajustar según necesidades)
    
    // Calcular costos adicionales
    $costo_puertas = $puertas * 500;
    $costo_cv = $cv * 200;
    
    // Calcular costo de financiamiento si se selecciona
    $costo_financiamiento = $financiamiento == "si" ? 2000 : 0;
    
    // Calcular el precio final sumando todos los costos
    $precio_final = $precio_base + $costo_puertas + $costo_cv + $costo_financiamiento;
    
    // El resultado final del presupuesto se almacena en la variable $precio_final

    // Mostrar resultados
    echo '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Auto budget</title>
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
            <h1>Auto budget</h1>
            <p><strong>Model:</strong> '.$modelo.'</p>
            <p><strong>Color:</strong> '.$color.'</p>
            <p><strong>Type:</strong> '.$tipo.'</p>
            <p><strong>Doors:</strong> '.$puertas.'</p>
            <p><strong>CV:</strong> '.$cv.'</p>
            <p><strong>Motor Type:</strong> '.$tipo_motor.'</p>
            <p><strong>Financing:</strong> '.$financiamiento.'</p>
            <p><strong>Final Price:</strong> $'.$precio_final.'</p>

            <div class="back-to-home">
                <a href="login.php">Return to main page</a>
            </div>
        </div>
        
    </body>
    </html>';

    // Destruir la sesión al hacer clic en "Volver a la página principal"
    session_destroy();

    if ($costo_financiamiento > 0) {
        // Si se elige financiamiento, redirigir a la página de financiamiento
        header("Location: finanPresupuesto.php?precio_final=$precio_final");
        exit();
    }
}
?>