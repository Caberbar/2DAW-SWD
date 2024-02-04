<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $libroId = $_POST["libro"];
    $usuarioId = $_POST["usuario"];
    $fechprestamo = $_POST["fechprestamo"];
    $fechdevolucion = $_POST["fechdevolucion"];

    // Establecer conexión con la base de datos
    $conn = mysqli_connect("localhost", "root", "", "biblioteca");

    // Verificar conexión
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Consulta SQL para insertar un nuevo alquiler
    $sqlInsertAlquiler = "INSERT INTO ALQUILERES (libro_id, usuario_id, fechprestamo, fechdevolucion) 
                        VALUES ('$libroId', '$usuarioId', '$fechprestamo', '$fechdevolucion')";

    // Ejecutar la consulta
    if (mysqli_query($conn, $sqlInsertAlquiler)) {
        // Redirigir a index.php
        header("Location: index.php");
        exit();
    } else {
        echo "Error al añadir el alquiler: " . mysqli_error($conn);
    }

    // Cerrar conexión
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Alquiler - Biblioteca</title>
    <style>
        /* Estilos para el formulario */
        .formulario {
            max-width: 400px;
            margin: 20px auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        /* Estilos para los botones */
        .anadir-btn {
            padding: 5px 9px;
            cursor: pointer;
            background-color: #2196F3;
            color: #fff;
            border: none;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="formulario">
        <h2>Rental Form - Library</h2>
        <form action="" method="POST">
            <label for="libro">Book:</label>
            <select name="libro" id="libro" required>
                <?php
                // Establecer conexión con la base de datos
                $conn = mysqli_connect("localhost", "root", "", "biblioteca");

                // Verificar conexión
                if (!$conn) {
                    die("Conexión fallida: " . mysqli_connect_error());
                }

                // Consulta SQL para obtener la lista de libros
                $sqlLibros = "SELECT id_libro, titulo FROM LIBROS";
                $resultLibros = mysqli_query($conn, $sqlLibros);

                // Verificar resultados de libros
                if (!$resultLibros) {
                    die("Error al obtener la lista de libros: " . mysqli_error($conn));
                }

                // Mostrar opciones de libros
                while ($rowLibro = mysqli_fetch_assoc($resultLibros)) {
                    echo "<option value='{$rowLibro["id_libro"]}'>{$rowLibro["titulo"]}</option>";
                }

                // Cerrar conexión
                mysqli_close($conn);
                ?>
            </select>

            <label for="usuario">User:</label>
            <select name="usuario" id="usuario" required>
                <?php
                // Establecer conexión con la base de datos
                $conn = mysqli_connect("localhost", "root", "", "biblioteca");

                // Verificar conexión
                if (!$conn) {
                    die("Conexión fallida: " . mysqli_connect_error());
                }

                // Consulta SQL para obtener la lista de usuarios
                $sqlUsuarios = "SELECT id_usuario, nombreusuario FROM USUARIOS";
                $resultUsuarios = mysqli_query($conn, $sqlUsuarios);

                // Verificar resultados de usuarios
                if (!$resultUsuarios) {
                    die("Error al obtener la lista de usuarios: " . mysqli_error($conn));
                }

                // Mostrar opciones de usuarios
                while ($rowUsuario = mysqli_fetch_assoc($resultUsuarios)) {
                    echo "<option value='{$rowUsuario["id_usuario"]}'>{$rowUsuario["nombreusuario"]}</option>";
                }

                // Cerrar conexión
                mysqli_close($conn);
                ?>
            </select>

            <label for="fechprestamo">Loan Date:</label>
            <input type="date" name="fechprestamo" id="fechprestamo" required>

            <label for="fechdevolucion">Return Date:</label>
            <input type="date" name="fechdevolucion" id="fechdevolucion" required>

            <input type="submit" value="Añadir Alquiler" class="anadir-btn">
        </form>
    </div>
</body>

</html>
