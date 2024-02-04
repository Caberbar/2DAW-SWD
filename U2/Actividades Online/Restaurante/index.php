<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Restaurant - A2</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>RESTAURANT</h1>
        <form action="pedido.php" method="post">
            <label for="mesa">Table Number:</label>
            <input type="number" name="mesa" required><br>

            <label for="camarero">Waiter:</label>
            <input type="text" name="camarero" required><br>

            <h2>First Courses (choose one):</h2>
            <select name="primer_plato">
                <option value="Salad">Salad</option>
                <option value="Soup">Soup</option>
                <option value="Pasta">Pasta</option>
            </select><br>

            <h2>Second Courses (choose one):</h2>
            <select name="segundo_plato">
                <option value="Fillet">Fillet</option>
                <option value="Fish">Fish</option>
                <option value="Chicken">Chicken</option>
            </select><br>

            <h2>Drinks (choose one):</h2>
            <select name="bebida">
                <option value="Water">Water</option>
                <option value="Refresco">Refresco</option>
                <option value="Wine">Wine</option>
            </select><br>

            <h2>Extras (you can choose several):</h2>
            <input type="checkbox" name="extras[]" value="Bread">Bread
            <input type="checkbox" name="extras[]" value="Butter">Butter
            <input type="checkbox" name="extras[]" value="Cheese">Cheese<br>

            <input type="submit" value="Enviar Pedido">
        </form>
    </div>
</body>

</html>

