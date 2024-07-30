<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/zonas.css">
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
        <div class="zonas">
            <img src="imagenes/Zonas de Mendoza/Viñedos_de_Mendoza.jpg" alt="">
        </div>
        <div class="zonas-p">
            <p>La zona este de Mendoza está formada por los departamentos de Santa Rosa, La Paz, San Martín, Junín, Rivadavia, Maipú
                y Luján de Cuyo. Esta zona se caracteriza por su producción agrícola, especialmente de vino, frutas y miel. También
                tiene una rica historia y cultura, vinculada al paso del General San Martín por estas tierras, que fueron escenario
                de la gesta libertadora de América del Sur.
            
                La zona este de Mendoza se divide en dos sectores: el oasis Mendoza Norte, que se extiende desde el río Mendoza
                hasta el río Desaguadero, límite con la provincia de San Luis; y la llanura de la Travesía, que es una zona
                desértica con yacimientos petrolíferos. El oasis Mendoza Norte es el área de mayor extensión de viñedos de
                Mendoza, donde se pueden visitar bodegas, fincas y agroindustrias. También se pueden apreciar los impactantes
                trazados geométricos de las parcelas, que contrastan con el paisaje árido.
            
                La zona este de Mendoza tiene una fuerte impronta sanmartiniana, ya que fue aquí donde el Libertador construyó su
                chacra y hogar rural, y donde organizó el cruce de los Andes. Algunos lugares que testimonian su paso son el olivo
                histórico, el museo de las Bóvedas, la acequia de la Patria, el paseo de la Patria y la capilla de Nuestra Señora de
                la Luz. También se pueden recorrer las postas coloniales, que eran paradas obligatorias en el camino real entre
                Buenos Aires y Santiago de Chile.
            
                La zona este de Mendoza también tiene una rica tradición religiosa, que se manifiesta en las fiestas patronales, las
                procesiones y los oratorios. Algunos ejemplos son las fiestas en honor a Santa Rosa de Lima, Nuestra Señora de
                Itatí, San Cayetano y la Virgen de La Paz. Además, se pueden visitar el oratorio del Alto Salvador con su museo
                Aragón, el templo del Vino y el teatro griego Juan Pablo II.
            
                La zona este de Mendoza ofrece también opciones para el turismo aventura y ecológico. En el embalse El Carrizal se
                pueden practicar deportes náuticos como motonáutica, esquí acuático, navegación a vela y pesca deportiva. En la
                reserva de la biosfera de Ñacuñán se puede disfrutar de la fauna y la flora típica del monte, en un área protegida
                por la UNESCO. También se pueden realizar actividades como canotaje en el río Desaguadero, cabalgatas, campeonatos
                de truco y espectáculos artísticos.
            
                La zona este de Mendoza es un destino turístico imperdible para quienes quieren conocer la historia, la cultura y la
                producción agrícola de esta provincia.</p>
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