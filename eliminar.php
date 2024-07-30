<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Conexión a la base de datos (debes configurar tus propias credenciales)
    $conex = mysqli_connect("localhost", "root", "", "mendoza",);

    // Verifica la conexión a la base de datos
    if (!$conex) {
        die("Error en la conexión a la base de datos: " . mysqli_connect_error());
    }

    // Escapa el ID para prevenir inyección SQL
    $id = mysqli_real_escape_string($conex, $_GET['id']);

    // Consulta SQL para eliminar el registro
    $sql = "DELETE FROM datos WHERE id = $id";

    // Ejecuta la consulta de eliminación
    if (mysqli_query($conex, $sql)) {
        // Registro eliminado con éxito, redirige a la página principal u otra página
        header("Location: user.php"); // Cambia "index.php" por la página a la que deseas redirigir
        exit();
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conex);
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conex);
} else {
    echo "ID no válido.";
}
?> 