<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    include "conexion.php";

    // Obtener el ID del registro a editar
    $id = $_GET["id"];

    // Consultar el registro específico de la base de datos
    $sql = "SELECT * FROM Cliente WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Mostrar el formulario de edición con los datos del registro
    ?>
        <h2>Editar Registro</h2>
        <form action="actualizar.php" method="post">

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="<?php echo $row['apellido']; ?>" required>

            <label for="rut">RUT:</label>
            <input type="text" id="rut" name="rut" value="<?php echo $row['rut']; ?>" required>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" value="<?php echo $row['direccion']; ?>" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" value="<?php echo $row['telefono']; ?>" required>
            
            <label for="numeroCaso">Numero de Caso:</label>
            <input type="text" id="numeroCaso" name="numeroCaso" value="<?php echo $row['numero_caso']; ?>" required>
   
            <label for="fechaInicio">Fecha de inicio del caso:</label>
            <input type="date" id="fechaInicio" name="fechaInicio" value="<?php echo $row['fecha_inicio']; ?>" placeholder="DD/MM/AAAA" required>

            <label for="descripcionCaso">Descripcion del Caso:</label>
            <input type="text" id="descripcionCaso" name="descripcionCaso" value="<?php echo $row['descripcion_caso']; ?>" required>
            
            <label for="estadoCaso">Estado del Caso:</label>
            <input type="text" id="estadoCaso" name="estadoCaso" value="<?php echo $row['estado_caso']; ?>" required>
            
            <label for="descripcionSentencia">Descripción de la sentencia:</label>
            <input type="text" id="descripcionSentencia" name="descripcionSentencia" value="<?php echo $row['descripcion_sentencia']; ?>" required>
            
            <label for="fechaCierre">Fecha de cierre del caso:</label>
            <input type="date" id="fechaCierre" name="fechaCierre" value="<?php echo $row['fecha_cierre']; ?>" placeholder="DD/MM/AAAA" required>

            <button type="submit">Actualizar</button>
        </form>
    <?php
    } else {
        echo "Registro no encontrado.";
    }

    $conn->close();
    ?>
</body>
</html>