<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Restaurant - A1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .comanda {
            background-color: white;
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        h1 {
            text-align: center;
        }

        .datos {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .comida,
        .complementos {
            margin-left: 20px;
        }

        img {
            height: 70px;
            margin-left: 120px;
        }
    </style>
</head>

<body>
<?php
    // Verifica si la solicitud es a través del método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Obtiene los datos del formulario
        $mesa = $_POST["mesa"];
        $camarero = $_POST["camarero"];
        $primer_plato = $_POST["primer_plato"];
        $segundo_plato = $_POST["segundo_plato"];
        $bebida = $_POST["bebida"];

        // Extras (si hay seleccionados)
        if (isset($_POST["extras"])) {
            // Con implode convertimos el array en una cadena de texto separado por comas
            $extras = implode(", ", $_POST["extras"]);
        } else {
            $extras = "Empty extras";
        }

        // Aquí puedes procesar los datos como desees (guardar en base de datos, enviar a una API, etc.)

        // Muestra los datos procesados en una estructura HTML
        echo '<div class="comanda">';
        echo "<h1>Order Received</h1>";

        // Muestra la información básica del pedido
        echo '<div class="datos">';
        echo "<p>Table Number: $mesa</p>";
        echo "<p>Waiter: $camarero</p>";
        echo '</div>';

        // Muestra los detalles de los platos principales y la bebida
        echo '<div class="comida">';
        echo "<p>First Course: $primer_plato</p>";
        echo "<p>Second Course: $segundo_plato</p>";
        echo "<p>Drink: $bebida</p>";
        echo '</div>';

        // Muestra los extras seleccionados
        echo '<div class="complementos">';
        echo "<p>Extras: $extras</p>";
        echo '</div>';

        // Muestra una imagen relacionada con la cocina
        echo '<img src="https://images.vexels.com/media/users/3/235847/isolated/preview/17df8cacbb429246edeaedeb2876cf87-ilustracion-de-sombrero-de-cocina-de-chef.png">';
        echo '</div>';

    } else {
        // Muestra un mensaje de error si la solicitud no es a través de POST
        echo "<p>Error processing the order. Retry again.</p>";
    }
?>

</body>

</html>