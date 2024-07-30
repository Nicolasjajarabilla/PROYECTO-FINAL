<?php 
    include("conexion.php");
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Turismo Mendoza</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="CSS/estilos.css">
    <style>
        #iconoUsario {
            position: relative;
            left: 60%;
            display: none;
            font-size: 30px;
        }
        #cs{
            text-decoration: none;
            color: #222;
        }
    </style>
</head>
<body class="container-fluid">
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
            <div class="dropdown" id="iconoUsario">
    <i class="bi bi-person-fill btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></i>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="user.php">Usuarios</a>
        <a href="index.php" id="cs"><button class="dropdown-item" onclick="cerrarSesion()">Cerrar Sesión</button></a>
    </div>
</div>
            </div>
    </header>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagenes/carusel/4tru8hi4.bmp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagenes/carusel/aconagua.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagenes/carusel/vino.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <h2 id="Mendoza-zonas">Mendoza Por Zonas</h2>
    <div class="Mendoza-zonas">
        <div>
            <img src="imagenes/Zonas de Mendoza/canon-del-atuel.jpg" alt="">
            <a href="zonasur.html">Zona Sur</a>
        </div>
        <div>
            <img src="imagenes/Zonas de Mendoza/Vall-de-Uco-Mendoza.jpg" alt="">
            <a href="valleuco.html">Valle Uco</a>
        </div>
        <div>
            <img src="imagenes/Zonas de Mendoza/Quebrada_de_Zonda_(San_Juan_-_Argentina).JPG" alt="">
            <a href="precordillera.html">Precordillera y Alta Montaña</a>
        </div>
        <div>
            <img src="imagenes/Zonas de Mendoza/Viñedos_de_Mendoza.jpg" alt="">
            <a href="zonaseste.html">Zona Este</a>
        </div>
        <div>
            <img src="imagenes/Zonas de Mendoza/sliderhome.jpg" alt="">
            <a href="granmendoza.html">Gran Mendoza</a>
        </div>
    </div>

    <h2 id="Atractivos">Princpales Atractivos</h2>
    <div class="Principales-mendoza">
        <div>
            <img src="imagenes/Atractivos/Aconcagua.JPG" alt="">
            <a href="aconcagua.html">Aconcagua</a>
        </div>
        <div>
            <img src="imagenes/Atractivos/gastronomia.jpg" alt="">
            <a href="gastronomia.html">Gastronomia De Mendoza</a>
        </div>
        <div>
            <img src="imagenes/Atractivos/nieve.jpg" alt="">
            <a href="nievemendoza.html">Nieve en Mendoza</a>
        </div>
        <div>
            <img src="imagenes/Atractivos/rio.avif" alt="">
            <a href="rio.html">Aventura en los Rio</a>
        </div>
        <div>
            <img src="imagenes/Atractivos/Spa.jpg" alt="">
            <a href="spa.html">Spa De Mendoza</a>
        </div>
        <div>
            <img src="imagenes/Atractivos/vendimia-plano-generaljpg.webp" alt="">
            <a href="vendimia.html">Fiesta De la Vendimia</a>
        </div>
    </div>
</body>
<script>
    //EVENTO DE CARGA DEL DOM
     document.addEventListener('DOMContentLoaded', function(){
     //VERIFICACION DEL ESTADO DE INICO DE SESION EN PHP
        let usuarioLogeado = <?php echo isset($_SESSION["usarioLogeado"]) ? 'true' : 'false'; ?>;
        
        //MANIPULACION DEL DOM 
        let iconoUsario = document.getElementById('iconoUsario');
        let botonesLoginRegister = document.querySelectorAll('.login, .register');

        // Mostrar u ocultar el icono de usuario según el estado de inicio de sesión
        iconoUsario.style.display = usuarioLogeado ? 'block' : 'none';

        // Ocultar los botones de login y register si el usuario está logeado
        if (usuarioLogeado) {
            botonesLoginRegister.forEach(function (boton) {
                boton.style.display = 'none';
            });
        }
    });
    //DEFINIMOS UNA FUNCION
    function cerrarSesion() {
    // Utiliza la función fetch para realizar una solicitud HTTP POST a "cerrarsecion.php"
    fetch("cerrarsecion.php", {
        method: "POST",  // Configura el método de la solicitud como POST
    })
    .then(response => {
        // La función then se ejecuta cuando la solicitud se completa y se recibe una respuesta
        if (response.ok) {
            window.location.href = "index.php";
        } else {
            // Si la respuesta tiene un código de estado no exitoso, maneja el error mediante un alerta
            alert("Error al cerrar sesión:" + response.statusText);
        }
    })
}
</script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
</html>