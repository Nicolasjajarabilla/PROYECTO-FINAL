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
        <div class="vendimia">
            <img src="imagenes/Atractivos/vendimia-plano-generaljpg.webp" alt="">
        </div>
        <div class="vendimia-p">
            <h2>Vendimia</h2>
            <p>
                Fiestas populares, tradición en todas las calles de Mendoza y una temporada para disfrutar en familia o con
                amigos.
        
                La época de Vendimia en Mendoza es una de las temporadas turísticas más importantes que tiene la provincia. Todo
                gira en torno a la Fiesta Nacional de la Vendimia, el gran homenaje a la vitivinicultura y a sus trabajos. Los
                festejos comienzan en enero y se extienden hasta el primer fin de semana de marzo, finalizando con el Acto
                Central,
                espectáculo que se realiza en el teatro griego “Frank Romero Day” a cielo abierto, enclavado en el pedemonte de
                la
                Precordillera de los Andes, donde participan más de 1000 artistas en escena. El espectáculo culmina con la
                elección
                de la Reina Nacional de la Vendimia que representa a la provincia durante un año.
        
                Se suman dos repeticiones con el cierre de grandes artistas.
            </p>
            <h2>Historia de vendimia</h2>
            <p>
                El origen de la vid en América está muy ligado a la labor espiritual ya que los evangelizadores necesitaban del vino
                para celebrar la misa.
            
                Los festejos vendimiales se remontan a la época de las grandes inmigraciones. La vitivinicultura en Cuyo ya había
                comenzado en el siglo XVI con la llegada de los españoles que traían vides para ser plantadas en América, obteniendo
                así el vino necesario para oficiar la Santa Misa. Como la importación de vino era dificultosa, junto a cada capilla
                que se levantaba, los conquistadores preparaban un parral y un huerto que serviría para abastecer sus necesidades
                alimenticias. Los nobles parrales ayudaban también a combatir los calores en las capillas solitarias. Las uvas no
                sólo servían para preparar el vino sino que eran consumidas frescas y constituían un nutritivo alimento.
            
                Por aquel entonces, al finalizar los trabajos de cosecha y elaboración del vino, se festejaba bajo un frondoso
                parral con baile, canto y comidas de diversos orígenes. En esa oportunidad se elegía la más linda de las mujeres y
                se la coronaba con hojas de vid y racimos de uva. Estos sencillos festejos fueron la fuente inspiradora de la fiesta
                que hoy tenemos.
            
                Nuestros bisabuelos decidieron trazar un primer intento de Fiesta Vendimial el 11 de abril de 1913, cuando un
                congreso de la industria y el comercio finalizó con un desfile de vendimiadores y carrozas alegóricas.
            
                Recién en 1936, durante la gestión del gobernador Guillermo Cano, se instituyó la Fiesta Nacional de la Vendimia. El
                18 de abril de ese mismo año, en el estadio de fútbol de Gimnasia y Esgrima, ante 25.000 personas se consagró la
                primera Reina Nacional de la Vendimia, Delia Larrive Escudero, representante de Godoy Cruz.
            
                Se decidió también en ese entonces llamar a un concurso para elegir la marcha de la Vendimia y Ernesto Fluixá
                recibió el primer premio. Pero en el 44 se adoptó una marcha oficial y se eligió Canto a Mendoza, cuya primera
                grabación fue realizada por Hugo del Carril.
            </p>
            <div class="actrativos-vendimia">
                <p>¿A qué actividades de la Vendimia podés asistir?</p>
                <ul>
                    <li>Vendimias Departamentales: Durante todo el verano, cada departamento de la provincia realiza su fiesta vendimial y
                        elige a la reina que lo representará y competirá por la corona nacional. Entrada gratuita</li>
                    <li>Semana Federal: Espectáculos de música y danza de todo el territorio provincial concentrados en un solo predio
                        ferial. Stands de degustaciones gastronómicas, muestras de microemprendimientos regionales y artesanías. Entrada
                        gratuita.</li>
                    <li>Bendición de los Frutos: Es el acto que se realiza el domingo anterior a la Fiesta Nacional de la Vendimia,
                        iniciando así la semana de las celebraciones centrales. Tradicional evento religioso y popular con el emotivo “Golpe
                        de Reja” del Sr. Gobernador de Mendoza que simboliza el llamado al trabajo del agricultor. Luego se celebra la
                        Bendición de los Frutos y se hace la presentación protocolar de las candidatas departamentales que se postulan para
                        Reina Nacional de la Vendimia. Se lleva a cabo en el Prado Gaucho del Parque Gral. San Martín. Entrada gratuita.
                    </li>
                    <li>Vía Blanca: Tradicional desfile nocturno de carros alegóricos por las calles céntricas de la Ciudad de Mendoza. Los
                        carros trasladan a las reinas vendimiales de cada departamento, que luego competirán por el trono nacional. Entrada
                        gratuita.</li>
                    <li>Carrusel: Multitudinario desfile matutino de carros alegóricos de cada departamento de la provincia, además del
                        desfile de tradicionales organizaciones folclóricas por las calles céntricas de la Ciudad. Entrada gratuita.</li>
                    <li>Acto Central: Espectáculo popular masivo que engloba casi todas las artes. Tiene un guión original en el que se
                        conjugan la palabra, la poesía, la luz y el sonido, el canto, la música, la danza, la actuación, los efectos
                        especiales, tanto escenográficos y tecnológicos, como acuáticos y pirotécnicos. Este texto puede encuadrarse en un
                        subgénero teatral único. Teatro Griego Frank Romero Day. Entrada paga.
                        Al término de la mencionada puesta en escena, se da paso a la elección de la Reina Nacional de la Vendimia.</li>
                    <li>Repeticiones del Acto Central: En los días sucesivos se realizan repeticiones del espectáculo con la participación
                        de artistas de renombre. Teatro Griego Frank Romero Day. Entrada paga.</li>
                </ul>
            </div>
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