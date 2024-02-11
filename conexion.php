<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "clienteDB";

// Crear conexión
$conn = new mysqli($server, $user, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>