<?php
// Establecer conexión con la base de datos
$conn = mysqli_connect("localhost", "root", "", "biblioteca");

// Verificar conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if (isset($_GET['alquiler_id'])) {
    $alquilerId = $_GET['alquiler_id'];

    // Consulta SQL para borrar el alquiler
    $sqlBorrarAlquiler = "DELETE FROM ALQUILERES WHERE alquiler_id = $alquilerId";
    $resultBorrarAlquiler = mysqli_query($conn, $sqlBorrarAlquiler);

    // Verificar si la eliminación fue exitosa
    if ($resultBorrarAlquiler) {
        echo "Rent removed successfully.";

        // Botón para volver a la tabla actualizada
        echo "<br><br><a href='index.php' class='anadir-btn'>Return to table</a>";
    } else {
        echo "Error al intentar eliminar el alquiler: " . mysqli_error($conn);
    }
} else {
    echo "ID de alquiler no proporcionado.";
}

// Cerrar conexión
mysqli_close($conn);
?>