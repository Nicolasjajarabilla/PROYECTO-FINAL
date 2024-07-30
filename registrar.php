<?php
session_start();
include("conexion.php");

if (isset($_POST['register'])) {
   if (
      strlen($_POST['name']) >= 1 &&
      strlen($_POST['email']) >= 1 &&
      strlen($_POST['direction']) >= 1 &&
      strlen($_POST['phone']) >= 1 &&
      strlen($_POST['password']) >= 1 
   ) {
      $name = trim($_POST['name']);
      $email = trim($_POST['email']);
      $direction = trim($_POST['direction']);
      $phone = trim($_POST['phone']);
      $password = trim($_POST['password']);
      $fecha = date("d/m/y");
      $consultaDatos = "INSERT INTO datos(nombre, email, direccion, telefono, clave, fecha)
             VALUES ('$name', '$email', '$direction', '$phone', '$password', '$fecha')";
    $resultadoDatos = mysqli_query($conex, $consultaDatos);
      if ($resultadoDatos) {

         $ultimoID = mysqli_insert_id($conex);

         $consultaUsuarios = "INSERT INTO usarios(id, email, clave) VALUES ('$ultimoID', '$email', '$password')";
         $resultadoUsuarios = mysqli_query($conex, $consultaUsuarios);

         if ($resultadoDatos) {
            $_SESSION["usarioLogeado"] = true;
            $_SESSION["email"] = $email;
            $_SESSION["id"] = $ultimoID;
            $_SESSION["nombre"] = $name;
            $_SESSION["direccion"] = $direction;
            $_SESSION["telefono"] = $phone;
            header("location: index.php")
          ?>
          <h3 class="succes">Formulario enviado</h3>
          <?php
         } else {
            ?>
            <h3 class="error">No se envio el formulario correcatamente (usarios)</h3>
            <?php
         } 
       }else{
            ?>
            <h3 class="error">No se envio el formulario correcatamente (datos)</h3>
            <?php
         } 
      } else{
            ?>
            <h3 class="error">Completa los campos</h3>    
            <?php
         } 
      } 
      
?>