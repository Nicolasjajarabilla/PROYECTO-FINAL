<?php
    // Agrega esto en tu página login.php, donde quieras que aparezca la alerta
    if (isset($_GET['INFORMACION']) && $_GET['INFORMACION'] == 'ERR_CREDENCIALES') {
        echo '<script>alert("Contraseña o correo electrónico incorrecto");</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/estilos.css">
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
                                <li><a href="zonasur.php">Zona sur</a></li>
                                <li><a href="valleuco.php">Vell Uco</a></li>
                                <li><a href="precordillera.php">Precordillera y Alta montaña</a></li>
                                <li> <a href="granmendoza.php">Gran Mendoza</a></li>
                                <li><a href="zonaseste.php">Zona Este</a></li>
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
                                <li></li><a href="aconcagua.php">Aconcagua</a>
                                <li><a href="gastronomia.php">Gastronomia De Mendoza</a></li>
                                <li><a href="nievemendoza.php">Nieve de Mendoza</a></li>
                                <li> <a href="rio.php">Aventura en los rios</a></li>
                                <li><a href="spa.php">Spa de Mendoza</a></li>
                                <li><a href="vendimia.php">Fiesta de la Vendimia</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <a href="Login.php" class="login">Login</a>
                <a href="registro.php" class="register">Register</a>
            </header>
</div>
    <br><br>
    <div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Login</h2>
            <form action="acc_login.php" method="POST" id="loginForm" onsubmit="return validarFormulario(event)">
                <div class="form-group">
                    <label for="email">Email o Numero de Telefono</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                </div>
                <div class="form-group">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" class="form-control" id="clave" name="contraseña">
                </div>
                <button type="submit" class="btn btn-primary btn-block margen-horizontal-auto">Ingresar</button>
                <br>
                <a href="registro.php" class="registro">Si no Tienes una Cuentas Registrate</a>
            </form>
        </div>
    </div>
    <?php 
       include("registrar.php");
    ?>
</body>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
</html>


