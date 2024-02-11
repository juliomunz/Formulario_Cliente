<?php
include "conexion.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$rut = $_POST["rut"];
$direccion = $_POST["direccion"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$numeroCaso = $_POST["numeroCaso"];
$descripcionCaso = $_POST["descripcionCaso"];
$fechaInicio = $_POST["fechaInicio"];
$estadoCaso = $_POST["estadoCaso"];
$descripcionSentencia = $_POST["descripcionSentencia"];
$fechaCierre = $_POST["fechaCierre"];

// Insertar datos en la base de datos
$sql = "INSERT INTO Cliente (nombre, apellido, rut, direccion, email, telefono, numero_caso, fecha_inicio, descripcion_caso, estado_caso, descripcion_sentencia, fecha_cierre) 
        VALUES ('$nombre', '$apellido', '$rut', '$direccion', '$email', '$telefono', '$numeroCaso', '$fechaInicio', '$descripcionCaso', '$estadoCaso', '$descripcionSentencia', '$fechaCierre')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar los datos: " . $conn->error;
}

$conn->close();
?>
<br>
<br>
<a href="formulario.html">Volver al formulario</a>