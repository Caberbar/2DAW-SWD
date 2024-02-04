<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Restaurant - A2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .container {
            text-align: left;
            width: 30%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            padding: 10px;
            margin: 10px;
        }

        a {
            display: inline-block;
            background-color: #6096ba;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
        }

        a:hover {
            background-color: #274c77;
        }
    </style>
</head>

<body>
    <h1>Order summary</h1>
    <div class="container">
        <?php
        // Mostrar selecciones actuales
        if (!empty($_SESSION['pedido'])) {
            // Recorre cada elemento del pedido almacenado en la sesión
            foreach ($_SESSION['pedido'] as $key => $item) {
                // Muestra la información del pedido en un formato estructurado
                echo '<p>Table Number: '.$item['mesa'].'<br />';
                echo 'Waiter: '.$item['camarero'].'<br />';
                echo 'First Course: '.$item['primer_plato'].'<br />';
                echo 'Second Course: ' . $item['segundo_plato'].'<br />';
                echo 'Drinks: '.$item['bebida'].'<br />';

                // Muestra los extras si hay alguno seleccionado
                if (!empty($item['extras'])) {
                    $extras = implode(', ', $item['extras']);
                    echo 'Extras: '.$extras.'<br />';
                } else {
                    echo 'Extras: Empty extras<br />';
                }

                echo '</p>';
                echo '<hr>';
            }
        } else {
            // Muestra un mensaje si no hay elementos en el pedido
            echo '<p>There are no elements in the order.</p>';
        }
        ?>


    </div>
    <a href="index.php">Back to menu</a>
    <a href="ticket.php">Finish order</a>
</body>

</html>