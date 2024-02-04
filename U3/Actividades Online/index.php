<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental List - Library</title>
    <style>
        /* Estilos para la tabla */
        .biblioteca-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .biblioteca-table th,
        .biblioteca-table td {
            border: 1px solid #ddd;
            padding: 5px;
            text-align: left;
        }

        .biblioteca-table th {
            background-color: #f2f2f2;
        }

        /* Estilos para los botones */
        .editar-btn,
        .borrar-btn,
        .anadir-btn {
            padding: 5px 9px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            text-decoration: none; /* Elimina el subrayado predeterminado en enlaces */
        }

        .editar-btn {
            background-color: #4caf50;
            color: #fff;
        }

        .borrar-btn {
            background-color: #f44336;
            color: #fff;
        }

        /* Estilos para el botón añadir */
        .cabecera {
            display: flex;
            flex-flow: column nowrap;
            align-items: center;
            justify-content: center;
        }

        .anadir-btn {
            background-color: #2196F3;
            color: #fff;
        }

        /* Estilos para el título */
    </style>
</head>

<body>
    <div class="cabecera">
        <h1>Rental List - Library</h1>

        <!-- Botón para añadir nuevo alquiler -->
        <a href="formulario_alquiler.php" class="anadir-btn">Add New Rental</a>
    </div>

    <?php
    // Establecer conexión con la base de datos
    $conn = mysqli_connect("localhost", "root", "", "biblioteca");

    // Verificar conexión
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Consulta SQL para seleccionar datos de alquileres existentes
    $sqlAlquileres = "SELECT A.alquiler_id, L.titulo, AU.apellidos, AU.nombre, A.fechprestamo, A.fechdevolucion, U.id_usuario, U.nombreusuario, U.telefono, U.fechentrega
            FROM ALQUILERES A
            JOIN LIBROS L ON A.libro_id = L.id_libro
            JOIN AUTORES AU ON L.autor_id = AU.id_autor
            JOIN USUARIOS U ON A.usuario_id = U.id_usuario";

    // Filtrar por un campo
    if (isset($_GET['filtro']) && $_GET['filtro'] != 'todos') {
        $campoFiltrar = $_GET['filtro'];
        $sqlAlquileres .= " ORDER BY $campoFiltrar";
    }

    $resultAlquileres = mysqli_query($conn, $sqlAlquileres);

    // Verificar resultados de alquileres existentes
    if (!$resultAlquileres) {
        die("Error al obtener la lista de alquileres: " . mysqli_error($conn));
    }
    ?>

    <!-- Formulario de filtrado -->
    <form action="" method="GET">
        <label for="filtro">Filter by:</label>
        <select name="filtro" id="filtro">
            <option value="alquiler_id">Rental ID</option>
            <option value="titulo">Title</option>
            <option value="nombre">Author Name</option>
            <option value="apellidos">Author LastNames</option>
            <option value="id_usuario">User ID</option>
            <option value="nombreusuario">Username</option>
            <option value="telefono">Phone</option>
        </select>
        <input type="submit" value="Filtrar">
    </form>

    <table class="biblioteca-table" id="tabla-alquileres">
        <tr>
            <th>Rental ID</th>
            <th>Title</th>
            <th>LastNames</th>
            <th>Names</th>
            <th>Loan Date</th>
            <th>Return Date</th>
            <th>User ID</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Deliver date</th>
            <th>Actions</th>
        </tr>

        <!-- Mostrar alquileres existentes -->
        <?php
        while ($row = mysqli_fetch_assoc($resultAlquileres)) { //Devuelve un array asociativo de strings que representa a la fila obtenida del conjunto de resultados
            echo "<tr>
                    <td>{$row["alquiler_id"]}</td>
                    <td>{$row["titulo"]}</td>
                    <td>{$row["apellidos"]}</td>
                    <td>{$row["nombre"]}</td>
                    <td>{$row["fechprestamo"]}</td>
                    <td>{$row["fechdevolucion"]}</td>
                    <td>{$row["id_usuario"]}</td>
                    <td>{$row["nombreusuario"]}</td>
                    <td>{$row["telefono"]}</td>
                    <td>{$row["fechentrega"]}</td>
                    <td>
                        <a href='editar.php?alquiler_id={$row["alquiler_id"]}' class='editar-btn'>Edit</a>
                        <a href='borrar_alquiler.php?alquiler_id={$row["alquiler_id"]}' class='borrar-btn'>Remove</a>
                    </td>
                </tr>";
        }
        ?>

    </table>

    <!-- Cerrar conexión -->
    <?php mysqli_close($conn); ?>
</body>

</html>
