<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona Sur</title>
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
            <img src="imagenes/Zonas de Mendoza/canon-del-atuel.jpg" alt="">
        </div>
        <div class="zonas-p">
            <p>La zona sur de Mendoza es una región que combina bellezas naturales, aventura, historia y cultura. Está formada por
                los departamentos de San Rafael, Malargüe y General Alvear, que ofrecen distintos atractivos para los visitantes.
            
                San Rafael es el destino más poblado y desarrollado del sur mendocino. Su principal atractivo es el río Atuel, que
                forma un impresionante cañón con formaciones rocosas de diversos colores y formas. El río también permite la
                práctica de deportes acuáticos como rafting, kayak y canotaje. Además, San Rafael cuenta con varios diques y
                embalses, como Los Reyunos, Agua del Toro y El Nihuil, que ofrecen paisajes de ensueño y actividades recreativas.
                San Rafael también se destaca por su producción vitivinícola, con reconocidas bodegas que invitan a degustar sus
                vinos finos y espumantes.
            
                Malargüe es el departamento más extenso y menos poblado del sur de Mendoza. Su territorio presenta una gran
                diversidad geográfica, con volcanes, mesetas, lagunas, cavernas y glaciares. Uno de sus mayores atractivos es el
                centro de esquí Las Leñas, que ofrece pistas de excelente calidad y servicios de primer nivel para los amantes de la
                nieve. Otros lugares imperdibles son la Reserva Natural Laguna de Llancanelo, hábitat de flamencos y otras aves; la
                Caverna de las Brujas, una maravilla subterránea llena de estalactitas y estalagmitas; el Pozo de las Ánimas, dos
                lagunas de origen kárstico rodeadas de leyendas; y el Parque Provincial La Payunia, una reserva volcánica única en
                el mundo.
            
                General Alvear es el departamento más oriental del sur mendocino. Su paisaje se caracteriza por la presencia de los
                ríos Atuel y Diamante, que riegan sus campos y permiten el desarrollo de la agricultura y la ganadería. General
                Alvear también ofrece opciones turísticas como balnearios, campings, museos y bodegas. Uno de sus sitios más
                destacados es la Laguna El Trapal, un refugio natural donde se puede observar una rica fauna y flora autóctona.
            
                La zona sur de Mendoza también tiene una rica historia y cultura, que se refleja en sus museos, monumentos y fiestas
                populares. Algunos ejemplos son el Museo Histórico Militar de Malargüe, que recuerda la gesta del cruce de los Andes
                por el general San Martín; el Museo Ferroviario de General Alvear, que conserva piezas del antiguo tren que unía
                Mendoza con Buenos Aires; el Museo del Vino y la Vendimia de San Rafael, que muestra la evolución de la industria
                vitivinícola; y la Fiesta Nacional del Chivo en Malargüe, que celebra la tradición criancera con espectáculos
                artísticos y gastronómicos.
            
                La zona sur de Mendoza es un destino ideal para disfrutar de la naturaleza, la aventura, la historia y la cultura en
                un solo lugar. Te invito a conocerla y a vivir una experiencia inolvidable.</p>
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