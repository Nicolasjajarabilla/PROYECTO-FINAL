
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/estilos.php.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                <a href="index.php"><i class="bi bi-x-octagon" id="close"></i></a>
                    <form method="post">
                        <h2>Registro</h2>
                        <p>Inicia tu registro</p>
                        <div class="input-wrapper">
                            <input type="text" name="name" placeholder="Nombre">
                            <img class="input-icon" src="images/name.svg" alt="">
                        </div>
                        <div class="input-wrapper">
                            <input type="email" name="email" placeholder="Correo">
                            <img class="input-icon" src="images/email.svg" alt="">
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="direction" placeholder="Dirección">
                            <img class="input-icon" src="images/direction.svg" alt="">
                        </div>
                        <div class="input-wrapper">
                            <input type="tel" name="phone" placeholder="Teléfono">
                            <img class="input-icon" src="images/phone.svg" alt="">
                        </div>
                        <div class="input-wrapper">
                            <input type="password" name="password" placeholder="Contraseña">
                            <img class="input-icon" src="images/password.svg" alt="">
                        </div>
                        <a href=""><input class="btn" type="submit" name="register" value="Enviar"></a>
                    </form>
                </div>
            </div>
        </div>
</body>
<?php 
       include("registrar.php");
    ?>
</html>