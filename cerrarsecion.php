<?php
// Iniciar la sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Cerrar la sesión
session_unset();
session_destroy();

// Puedes redirigir a la página de inicio de sesión o a otra página después de cerrar la sesión
header("Location: index.php");
exit();
?>

