<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Usarios</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/usario.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="CSS/estilos.css">
  <?php 
  include("PROTECCION.php");
       $conex = mysqli_connect("localhost", "root", "", "mendoza",); 
       $consulta = "SELECT * FROM `datos`";
       $resultado = mysqli_query($conex, $consulta)
    ?>
    <script type="text/javascript">
      function confirmarEliminar() {
        return confirm("¿Estás seguro de que deseas eliminar este registro?")
      }
    </script>
</head>
<body>
  <div class="container-fluid">
  <header class="container-fluid">
            <div class="navbar">
                <h2><a href="index.php" id="mendoza">Mendoza</a></h2>
                <ul>
                    <li>Zonas<svg xmlns="http://www.w3.org/2000/svg" width="20" height="10" fill="currentColor"
                            class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                        <div class="dropdown-content">
                            <ul>
                                <li><a href="zonasur.html">Zona sur</a></li>
                                <li><a href="valleuco.html">Vell Uco</a></li>
                                <li><a href="precordillera.html">Precordillera y Alta montaña</a></li>
                                <li> <a href="granmendoza.html">Gran Mendoza</a></li>
                                <li><a href="zonaseste.html">Zona Este</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>Atractivos<svg xmlns="http://www.w3.org/2000/svg" width="20" height="10" fill="currentColor"
                            class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                        <div class="dropdown-content">
                            <ul>
                                <li></li><a href="aconcagua.html">Aconcagua</a>
                                <li><a href="gastronomia.html">Gastronomia De Mendoza</a></li>
                                <li><a href="nievemendoza.html">Nieve de Mendoza</a></li>
                                <li> <a href="rio.html">Aventura en los rios</a></li>
                                <li><a href="spa.html">Spa de Mendoza</a></li>
                                <li><a href="vendimia.html">Fiesta de la Vendimia</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <a href="Login.php" class="login">Login</a>
                <a href="registro.php" class="register">Register</a>
                <!--Icono de Usario-->
            </div>
        </header>
        </div>
        <div class="container">
        <div class="row">
      <div class="col-md-12 d-flex justify-content-center align-items-center">
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>
              <th scope="col">Direccion</th>
              <th scape="col">Numero de telefono</th>
              <th scape="col">Fecha</th>
              <th scape="col">Accion</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
        while ($fila = mysqli_fetch_assoc($resultado)){
          echo "<tr>";
              echo "<td>" . $fila['nombre'] . "</td>";
              echo "<td>" . $fila['email'] . "</td>";
              echo "<td>" . $fila['direccion'] . "</td>";
              echo "<td>" . $fila['telefono'] . "</td>";
              echo "<td>" . $fila['fecha'] . "</td>";
              echo '<td>
              <a href="editar.php?id=' . $fila['id'] . '">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
              </svg>
            </a>
            <a href="eliminar.php?id=' . $fila['id'] . '" onclick="return confirmarEliminar()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash2-fill" viewBox="0 0 16 16">
                <path d="M2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225zm9.89-.69C10.966 2.214 9.578 2 8 2c-1.58 0-2.968.215-3.926.534-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466-.18-.14-.498-.307-.975-.466z"/>
            </svg>
        </a>
                    </td>';
              echo "</tr>";
         }
         mysqli_free_result($resultado); 
         ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
        </div>
   
</body>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
</html>