<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="CSS/actualizar.css">
</head>
<body>
    <div class="container">
        <form method="post" class="formulario">
            <?php
            $conex = mysqli_connect("localhost", "root", "", "mendoza",); 
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $consulta = "SELECT * FROM datos WHERE id = $id";
                $resultado = mysqli_query($conex, $consulta);
                $fila = mysqli_fetch_assoc($resultado);

                if ($fila) {
                    echo '<input  class="form-control" type="hidden" name="id" value="' . $fila['id'] . '">';
                    echo '<label for="nombre">Nombre:</label>';
                    echo '<input  class="form-control" type="text" name="nombre" value="' . $fila['nombre'] . '">';
                    echo '<br>';
                    echo '<label for="email">Email:</label>';
                    echo '<input  class="form-control" type="email" name="email" value="' . $fila['email'] . '">';
                    echo '<br>';
                    echo '<label for="direccion">direccion:</label>';
                    echo '<input class="form-control" type="text" name="direccion" value="' . $fila['direccion'] . '">';
                    echo '<br>';
                    echo '<label for="telefono">Telefono:</label>';
                    echo '<input class="form-control" type="number" name="telefono" value="' . $fila['telefono'] . '">';
                    echo '<br>';
                    echo '<label for="clave">Clave:</label>';
                    echo '<input  class="form-control" type="password" name="clave" value="' . $fila['clave'] . '">';
                }
            }
            ?>
            <button type="submit" name="actualizar" class="btn btn-primary">Actualizar</button>
            <button type="submit" name="cancelar" class="btn btn-primary">Cancelar</button>
        </form>
    </div>
</body>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
</html>

<?php
if (isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $nuevoNombre = $_POST['nombre'];
    $nuevoEmail = $_POST['email'];
    $nuevadireccion = $_POST['direccion'];
    $nuevotelefono = $_POST['telefono'];
    $nuevaclave = $_POST['clave'];
    

    $sql = "UPDATE datos SET nombre = '$nuevoNombre', email = '$nuevoEmail', direccion = '$nuevadireccion', telefono = '$nuevotelefono', clave = '$nuevaclave' WHERE id = $id";
    $resultado = mysqli_query($conex, $sql);

    if ($resultado) {
        header("Location: user.php");
        exit;
    } else {
        echo "Error al actualizar el registro: " . mysqli_error($conex);
    } 
 }  else if (isset($_POST['cancelar'])) {
        header("Location: user.php");
        exit;
}
?>
