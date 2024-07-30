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
        <div class="spa">
            <img src="imagenes/Atractivos/Spa.jpg" alt="">
        </div> 
        <div class="spa-p">
            <p>
                Mendoza además de sus espectaculares paisajes que invitan al relax, tiene una destacada oferta de establecimientos y
                programas wellness que se enfocan en el bienestar físico y mental de sus visitantes.
            </p>
            <p>
                Enoturismo & Spa
                Lodges y resorts entre viñedos incluyen en sus propuestas diversos programas de spa para disfrutar de la
                tranquilidad en entornos de lujo y sofisticación.
            </p>
            <ul>
                <li><b>The Vines Resort & Spa:</b> En el Valle de Uco, muy cerca de la cordillera, The Vines propone estadías fitness con spa,
                    gimnasio, piscina atemperada, laguna y jacuzzi. La vista de este resort es imperdible.</li>
                <li><b>Cavas Wine Lodge-Relais & Chateaux:</b> En el corazón de Luján de Cuyo, Cavas ofrece tratamientos que combinan productos
                    locales utilizando extractos de semilla de uva. Cuenta con dos salas de tratamientos en pareja, zona de baños de
                    vino, jacuzzi y sauna.</li>
                <li><b>Entre Cielos | Hotel Boutique & Spa Hamam: </b>Un santuario de relajación en pleno Vistalba, al pie del Cordón del
                    Plata, donde se hacen rituales turcos de limpieza y tratamientos a base de uva, usando semillas y extractos para
                    calmar y proteger la piel.</li>
                <li><b>Termas de Cacheuta Hotel & Spa:</b> Enclavado en el cajón del Río Mendoza, en plena pre-cordillera, el hotel termal es
                    único. Sesiones en una gruta subterránea, entre piedras andinas de donde emerge el agua termal, fango terapia y
                    piscinas naturales con diversas temperaturas al aire libre son perfectas para pasar el TermaSpa Full Day, el
                    programa más requerido ya que no sólo se disfruta del TermaSpa sino también del exquisito y ya tradicional Almuerzo
                    Buffet Criollo.</li>
                <li><b>Villa Mansa Wine Hotel & Spa:</b> Un hotel en la primera zona vitivinícola con un spa para disfrutar de masajes, sauna
                    seco, ducha escocesa y jacuzzi con impactantes vistas a la cordillera de los Andes</li>
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