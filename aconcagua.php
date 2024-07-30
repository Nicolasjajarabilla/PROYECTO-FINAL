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
</head>
<body class="container-fluid">
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
        <div class="aconcagua">
            <img src="imagenes/Atractivos/Aconcagua.JPG" alt="">
        </div>
        <div class="aconcagua-p">
            <p>
                El Aconcagua es la montaña más alta de Sudamérica y de todo el hemisferio occidental, con una altura de 6.962 metros
                sobre el nivel del mar. Se encuentra en el Parque Provincial Aconcagua, un área natural protegida de la provincia de
                Mendoza, Argentina, que ofrece paisajes espectaculares y una gran diversidad de flora y fauna. El parque se ubica
                sobre la Ruta Nacional 7, que une Mendoza con Santiago de Chile, y está a unos 190 km de la capital mendocina.
            </p>
            <p>
                El parque es un destino ideal para los amantes del montañismo, el senderismo y la naturaleza. Se pueden realizar
                diferentes actividades según el nivel de dificultad y el tiempo disponible. Algunas de las opciones son:
            </p>  
            <ul>
                <li><b>Caminata fácil por el sendero interpretativo Valle de los Horcones:</b> este circuito de una hora de duración es el más
                    sencillo y accesible para todos los públicos. Permite apreciar la Laguna Espejo, formaciones geológicas, restos
                    fósiles, el mirador del Aconcagua y la Laguna Horcones.</li>
                <li><b>Trekking de un día por el Valle de Horcones:</b> este recorrido tiene una duración de 3 a 4 horas y llega hasta
                    Confluencia, el primer campamento base para los andinistas que intentan la cumbre del Aconcagua. Se puede observar
                    el río Horcones, la Quebrada de los Relinchos y la impresionante pared sur del Aconcagua.</li>
                <li><b>Trekking corto de 3 días por el Valle de Horcones:</b> esta opción permite llegar hasta Plaza Francia, el campamento
                    base para la ruta francesa por la pared sur del Aconcagua. Se requiere un permiso especial y un equipo adecuado para
                    pasar dos noches en la montaña. Se atraviesa el Puente Colgante, se pasa por Confluencia y se disfruta de una vista
                    panorámica del macizo del Aconcagua.</li>
                <li><b>Trekking largo de 6 días por el Valle de las Vacas:</b> esta alternativa es la más exigente y aventurera, ya que implica
                    recorrer el circuito completo alrededor del Aconcagua. Se necesita un permiso especial, un equipo completo y una
                    buena aclimatación. Se parte desde Punta de Vacas, se pasa por Plaza Argentina, Plaza de Mulas, Plaza Francia y se
                    regresa a Horcones. Se puede admirar el Aconcagua desde todos sus ángulos y conocer los distintos ecosistemas de la
                    cordillera.</li>
                <li><b>Ascenso al Aconcagua:</b> esta es la actividad más desafiante y solo apta para montañistas experimentados y preparados
                    física y mentalmente. Se requiere un permiso especial, un equipo completo, un guía profesional y un plan de
                    contingencia. Existen varias rutas posibles para alcanzar la cumbre, siendo las más populares la ruta normal por el
                    noroeste y la ruta del glaciar de los Polacos. El ascenso puede demorar entre 12 y 20 días, dependiendo de las
                    condiciones climáticas y la aclimatación.</li>
            </ul>
            <p>
                Además de estas actividades, el Parque Provincial Aconcagua tiene un valor arqueológico e histórico, ya que en sus
                alrededores se han encontrado restos humanos y objetos pertenecientes a las culturas prehispánicas que habitaron la
                zona. También se puede visitar el Museo Arqueológico de Los Andes3, ubicado en la ciudad chilena de Los Andes, que
                exhibe piezas relacionadas con el Aconcagua y otras montañas sagradas.
            </p>
        </div>
    <div>
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