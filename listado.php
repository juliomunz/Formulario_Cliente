<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
</head>
<body>
<div class="container mt-4">
    <h2 class="text-center">Listado de Clientes</h2>
    <table class="table table-bordered">
    <?php
    include "conexion.php";

    // Consultar los registros de la base de datos
    $sql = "SELECT * FROM Cliente";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<tr><th>Nombre</th><th>Apellido</th><th>RUT</th><th>Dirección</th><th>Teléfono</th><th>Email</th><th>Numero Caso</th><th>Descripción Caso</th><th>Fecha Inicio</th><th>Estado Caso</th><th>Descripción Sentencia</th><th>Fecha Cierre</th></tr>";
        echo "<tbody>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td>" . $row["apellido"] . "</td>";
            echo "<td>" . $row["rut"] . "</td>";
            echo "<td>" . $row["direccion"] . "</td>";
            echo "<td>" . $row["telefono"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["numero_caso"] . "</td>";
            echo "<td>" . $row["descripcion_caso"] . "</td>";
            echo "<td>" . $row["fecha_inicio"] . "</td>";
            echo "<td>" . $row["estado_caso"] . "</td>";
            echo "<td>" . $row["descripcion_sentencia"] . "</td>";
            echo "<td>" . $row["fecha_cierre"] . "</td>";
            echo "<td><a href='eliminar.php?id=" . $row["id"] . "' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este registro?\")'>Eliminar</a></td>";
            echo "<td><a href='editar.php?id=" . $row["id"] . "'>Actualizar</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        
    } else {
        echo "No hay registros en la base de datos. Crea nuevos registros para visualizarlos acá";
    }
    // Cerrar conexión
    $conn->close();
    ?>
    <br>
    <a href="formulario.html">Volver al formulario</a>

</body>
</html>