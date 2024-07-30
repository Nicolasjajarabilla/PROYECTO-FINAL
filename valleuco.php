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
        <h2><a href="index.php">Mendoza</a></h2>
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
            <img src="imagenes/Zonas de Mendoza/Vall-de-Uco-Mendoza.jpg" alt="">
        </div>
        <div class="zonas-p">
            <p>
                El Valle de Uco es una región ubicada en el centro de la provincia de Mendoza, entre el Cordón Frontal de la
                Cordillera de los Andes y el Desierto de Huayquerías. Está formado por los departamentos de San Carlos, Tunuyán y
                Tupungato, y se caracteriza por su belleza natural, su producción vitivinícola y su riqueza cultural e histórica.
            
                El Valle de Uco fue habitado por los pueblos originarios huarpes, pehuenches y quechuas, que se dedicaban a la
                agricultura y al pastoreo. Con la llegada de los españoles, se produjo un proceso de mestizaje y resistencia, que
                dejó huellas en el patrimonio arqueológico y arquitectónico de la zona. El Fortín de San Carlos, construido en 1772
                para defenderse de los malones indígenas, es uno de los testimonios más antiguos de esta época.
            
                El Valle de Uco también fue escenario de la gesta sanmartiniana, ya que por sus caminos transitó el Ejército de los
                Andes en su campaña libertadora. El Manzano Histórico, al pie del Cordón del Portillo, es un lugar emblemático que
                recuerda el regreso del General San Martín a su patria después de cruzar los Andes. Allí se encuentra el Monumento
                Retorno a la Patria, una imponente escultura de Jesucristo que simboliza la fe y el agradecimiento del pueblo
                argentino.
            
                El Valle de Uco es también un destino turístico de primer nivel, que ofrece una variedad de actividades y
                experiencias para disfrutar. Su principal atractivo es el enoturismo, ya que en sus tierras se cultivan algunos de
                los mejores vinos del país y del mundo. Sus terruños elevados y sus condiciones climáticas favorecen la producción
                de vinos de alta gama, reconocidos internacionalmente por su calidad y personalidad. El Valle de Uco cuenta con
                numerosas bodegas que abren sus puertas a los visitantes para ofrecerles degustaciones, visitas guiadas, gastronomía
                gourmet y alojamiento temático.
            
                Pero el Valle de Uco no solo es vino. También es naturaleza, aventura, cultura y tradición. Sus paisajes montañosos
                invitan a realizar actividades al aire libre como trekking, cabalgatas, ciclismo, rafting, pesca deportiva y
                avistaje de aves. La Laguna del Diamante, una reserva natural que alberga una laguna de origen glaciar rodeada por
                el Volcán Maipo, es uno de los lugares más impresionantes y paradisíacos del Valle de Uco. El Desierto de
                Huayquerías, un ecosistema árido que contrasta con la vegetación y el río Tunuyán, es otro sitio que sorprende por
                su mística y su biodiversidad.
            
                El Valle de Uco también conserva su identidad rural y sus costumbres populares, que se expresan en su música cuyana,
                sus festejos patronales, sus artesanías y su cocina campestre. El turismo rural permite al visitante conocer la vida
                cotidiana de los pobladores locales, participar en las actividades agropecuarias, degustar productos regionales como
                sidras, jugos, conservas y esencias, y alojarse en antiguas casas de campo o estancias jesuíticas.
            
                El Valle de Uco es un lugar para descubrir, disfrutar y aprender. Es una región que combina historia, cultura,
                naturaleza y vino en un marco incomparable. Es una invitación a vivir una experiencia única e inolvidable.
            </p>
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