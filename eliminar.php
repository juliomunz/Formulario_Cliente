<?php
include "conexion.php";

// Obtener el ID del registro a eliminar
$id = $_GET["id"];

// Eliminar el registro de la base de datos
$sql = "DELETE FROM Cliente WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Registro eliminado correctamente";
} else {
    echo "Error al eliminar el registro: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
<br>
<br>
<a href="listado.php">Volver al listado de clientes</a>