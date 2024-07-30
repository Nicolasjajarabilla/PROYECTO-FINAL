<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/actracciones.css">
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
            <!--Icono de Usario-->
            <div class="dropdown" id="iconoUsario">
    <i class="bi bi-person-fill btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></i>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="user.php" target="_blank">Usuarios</a>
        <a href="index.php" id="cs"><button class="dropdown-item" onclick="cerrarSesion()">Cerrar Sesión</button></a>
    </div>
</div>
            </div>
    </header>
        <div class="nieve">
            <img src="imagenes/Atractivos/nieve.jpg" alt="">
        </div>
        <div class="nieve-p">
            <p>
                La aventura de disfrutar la nieve en familia, con amigos o para deportes extremos. El invierno en Mendoza y ese
                manto blanco que cubre las montañas de Mendoza es un gran atractivo en nuestra provincia. Centros de esquí y parques
                de nieves son disfrutados por esquiadores profesionales como también por aquellos que quieren compartir en familia o
                con amigos.
            </p>
            <p>
                Aquí tienes un resumen de las zonas donde más nievan en Mendoza y las principales actividades que se pueden hacer en
                la nieve:
            </p>
            <ul>
                <li>Valle de Las Leñas: Es el centro de esquí más importante de Mendoza y de América, con 230 hectáreas de superficie
                    esquiable y 30 pistas para todos los niveles. Se puede practicar esquí, snowboard, heliesquí, trineo y motos de
                    nieve. También hay hoteles, restaurantes, bares y discotecas para disfrutar del après-ski. Se encuentra a 70 km de
                    Malargüe y a 450 km de Mendoza capital.</li>
                <li>Los Puquios: Es un pequeño parque de nieve ideal para familias y principiantes, con 4 hectáreas y un medio de
                    elevación llamado Magic Carpet. Se puede alquilar trineos, botas, esquíes y tablas, y hay un restaurante y una zona
                    de picnic. Se encuentra a 185 km de Mendoza capital y a 5 km de Puente del Inca</li>
                <li>Los Penitentes: Es un antiguo centro de esquí que hoy permanece cerrado, pero sus pistas son utilizadas por locales
                    y turistas para jugar con la nieve y deslizarse en culipatín y trineos. El acceso es libre y gratuito, pero no hay
                    servicios. Se encuentra a 183 km de Mendoza capital y a 62 km de Uspallata</li>
                <li>Vallecitos: Es otro centro de esquí que ofrece pistas para todos los niveles, con 8 medios de elevación y una
                    escuela de esquí. Se puede practicar esquí, snowboard, esquí de travesía y raquetas de nieve. También hay refugios,
                    restaurantes y alquiler de equipos. Se encuentra a 80 km de Mendoza capital y a 30 km de Potrerillos</li>
            </ul>
        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let usuarioLogeado = <?php echo isset($_SESSION["usarioLogeado"]) ? 'true' : 'false'; ?>;
        
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
    function cerrarSesion() {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "cerrarsecion.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log("Sesión cerrada exitosamente");
                window.location.href = "index.php";  // Redirige a la página de inicio de sesión u otra página
            }
        };
        xhr.send();
    }
</script>
</html>