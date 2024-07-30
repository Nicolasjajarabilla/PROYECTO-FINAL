<?php
session_start();

if (isset($_POST["email"]) && isset($_POST["contraseña"])) {
    $email = $_POST["email"];
    $clave = $_POST["contraseña"];

    include("conexion.php");

    // Corregir la consulta SQL para evitar inyección de SQL
    $sql = "SELECT * FROM usarios WHERE email = '$email' AND clave = '$clave'";

    $respuesta = mysqli_query($conex, $sql);

    if ($respuesta && mysqli_num_rows($respuesta) > 0) {
            $datos = mysqli_fetch_array($respuesta);
            $_SESSION["email"] = $datos["email"];
            $_SESSION["id"] = $datos["id"];
            $_SESSION["usarioLogeado"] = true; 

            // Redireccionamos al formulario
            header("location:index.php");
            exit(); // Importante para evitar que el script siga ejecutándose después de redirigir
        } else {
            // Redireccionamos al formulario con mensaje de error
            header("location:login.php?INFORMACION=ERR_CREDENCIALES");
            exit();
        }
    } else {
        header("location: login.php?INFORMACION=ERR_FORM");
        exit();
    }
    mysqli_close($conex);
?>