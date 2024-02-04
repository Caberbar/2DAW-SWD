<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $alquilerId = $_POST["alquiler_id"];
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

    // Consulta SQL para actualizar el alquiler
    $sqlUpdateAlquiler = "UPDATE ALQUILERES 
                        SET libro_id = '$libroId', usuario_id = '$usuarioId', 
                            fechprestamo = '$fechprestamo', fechdevolucion = '$fechdevolucion'
                        WHERE alquiler_id = '$alquilerId'";

    // Ejecutar la consulta
    if (mysqli_query($conn, $sqlUpdateAlquiler)) {
        // Redirigir a index.php
        header("Location: index.php");
        exit();
    } else {
        echo "Error al editar el alquiler: " . mysqli_error($conn);
    }

    // Cerrar conexión
    mysqli_close($conn);
}

// Obtener el ID del alquiler a editar
$alquilerId = $_GET["alquiler_id"];

// Establecer conexión con la base de datos
$conn = mysqli_connect("localhost", "root", "", "biblioteca");

// Verificar conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Consulta SQL para obtener datos del alquiler a editar
$sqlAlquiler = "SELECT alquiler_id, libro_id, usuario_id, fechprestamo, fechdevolucion
                FROM ALQUILERES
                WHERE alquiler_id = '$alquilerId'";
$resultAlquiler = mysqli_query($conn, $sqlAlquiler);

// Verificar resultados del alquiler
if (!$resultAlquiler) {
    die("Error al obtener datos del alquiler: " . mysqli_error($conn));
}

// Obtener datos del alquiler a editar
$rowAlquiler = mysqli_fetch_assoc($resultAlquiler);

// Consulta SQL para obtener la lista de libros
$sqlLibros = "SELECT id_libro, titulo FROM LIBROS";
$resultLibros = mysqli_query($conn, $sqlLibros);

// Consulta SQL para obtener la lista de usuarios
$sqlUsuarios = "SELECT id_usuario, nombreusuario FROM USUARIOS";
$resultUsuarios = mysqli_query($conn, $sqlUsuarios);

// Cerrar conexión
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alquiler - Biblioteca</title>
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
        .editar-btn {
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
        <h2>Edit Rental - Library</h2>
        <form action="" method="POST">
            <input type="hidden" name="alquiler_id" value="<?php echo $rowAlquiler['alquiler_id']; ?>">

            <label for="libro">Book:</label>
            <select name="libro" id="libro" required>
                <?php
                // Mostrar opciones de libros
                while ($rowLibro = mysqli_fetch_assoc($resultLibros)) {
                    // La siguiente línea determina si la opción actual en el menú desplegable
                    // debe estar seleccionada, comparando el 'libro_id' de la tabla de alquileres
                    // con el 'id_libro' de la tabla de libros. Si coincide, se asigna 'selected',
                    // de lo contrario, se asigna una cadena vacía.
                    $selected = ($rowAlquiler['libro_id'] == $rowLibro['id_libro']) ? 'selected' : '';
                    echo "<option value='{$rowLibro["id_libro"]}' $selected>{$rowLibro["titulo"]}</option>";
                }
                ?>
            </select>

            <label for="usuario">User:</label>
            <select name="usuario" id="usuario" required>
                <?php
                // Mostrar opciones de usuarios
                while ($rowUsuario = mysqli_fetch_assoc($resultUsuarios)) {
                    $selected = ($rowAlquiler['usuario_id'] == $rowUsuario['id_usuario']) ? 'selected' : '';
                    echo "<option value='{$rowUsuario["id_usuario"]}' $selected>{$rowUsuario["nombreusuario"]}</option>";
                }
                ?>
            </select>

            <label for="fechprestamo">Loan Date:</label>
            <input type="date" name="fechprestamo" id="fechprestamo" value="<?php echo $rowAlquiler['fechprestamo']; ?>" required>

            <label for="fechdevolucion">Return Date:</label>
            <input type="date" name="fechdevolucion" id="fechdevolucion" value="<?php echo $rowAlquiler['fechdevolucion']; ?>" required>

            <input type="submit" value="Guardar Cambios" class="editar-btn">
        </form>
    </div>
</body>

</html>