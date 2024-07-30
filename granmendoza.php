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
        <div class="zonas">
            <img src="imagenes/Zonas de Mendoza/sliderhome.jpg" alt="">
        </div>
        <div class="zonas-p">
            <p>Gran Mendoza es una región urbana que comprende siete departamentos de la provincia de Mendoza: Ciudad de Mendoza,
                Godoy Cruz, Las Heras, Guaymallén, Maipú, Luján de Cuyo y Lavalle. Es la cuarta aglomeración más poblada de
                Argentina y un importante centro político, económico y cultural del país.
            
                La historia de Gran Mendoza se remonta a 1561, cuando Pedro del Castillo fundó la ciudad de Mendoza en el valle de
                Huentota, habitado por los indígenas huarpes. La ciudad fue el escenario de importantes acontecimientos históricos,
                como la organización del Ejército Libertador por el general José de San Martín, que partió desde allí para cruzar
                los Andes y liberar a Chile y Perú del dominio español. También sufrió un devastador terremoto en 1861, que obligó
                a trasladar la ciudad a su ubicación actual, más al sur.
            
                La cultura de Gran Mendoza se caracteriza por su diversidad y riqueza, influenciada por las raíces indígenas,
                españolas e inmigrantes. Entre sus expresiones más destacadas se encuentran la Fiesta Nacional de la Vendimia, que
                celebra la cosecha del vino, el producto emblemático de la región; el arte urbano, que decora las calles y plazas
                con murales y esculturas; la gastronomía, que combina sabores locales e internacionales; y la música, que abarca
                desde el folclore hasta el rock.
            
                El turismo es una de las principales actividades económicas de Gran Mendoza, que ofrece una variedad de atractivos
                naturales, culturales y recreativos. Entre ellos se pueden mencionar el Parque General San Martín, el pulmón verde
                de la ciudad, que alberga el Cerro de la Gloria, el Ecoparque y el Estadio Malvinas Argentinas; el Paseo Peatonal
                Sarmiento, el centro comercial y gastronómico de la ciudad; el Museo del Área Fundacional, que conserva las ruinas
                de la antigua ciudad; y las bodegas y viñedos, que invitan a degustar los mejores vinos del país.</p>
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