<?php
include "conexion.php";


    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

$id = $_POST["id"];
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

$sql = "UPDATE Cliente 
        SET nombre='$nombre',
            apellido='$apellido',
            rut='$rut',
            direccion='$direccion',
            email='$email',
            telefono='$telefono',
            numero_caso='$numeroCaso',
            fecha_inicio='$fechaInicio',
            descripcion_caso='$descripcionCaso',
            estado_caso='$estadoCaso',
            descripcion_sentencia='$descripcionSentencia',
            fecha_cierre='$fechaCierre'
        WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado correctamente";
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}

$conn->close();
?>
<br>
<br>
<br>
<a href="listado.php">Volver al listado</a>