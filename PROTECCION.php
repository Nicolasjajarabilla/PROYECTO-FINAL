<?php
session_start();
if (!isset($_SESSION["email"]) || !isset($_SESSION["id"]) || !isset($_SESSION["usarioLogeado"])) {
    header("location: login.php?INFORMACION=ERR_CREDENCIALES");
    exit();
}
?>