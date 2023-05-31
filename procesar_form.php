<?php
$server = "localhost";
$usuario = "root";
$passwd = "";
$nombreBD = "practicaphp";
$conexion = new mysqli($server, $usuario, $passwd);

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

mysqli_select_db($conexion, $nombreBD);
if (isset($_POST["nombre"], $_POST["apellido"], $_POST["email"]) and $_POST["nombre"] != "" and $_POST["apellido"] != "" and $_POST["email"] != "") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $consulta = "INSERT INTO usuario (nombre,apellido,email) VALUES('$nombre','$apellido', '$email')"; //el id se auto-incrementa, por eso no hay que incluirlo
    if (mysqli_query($conexion, $consulta)) {
        echo "<h1>Registro completado</h1>";
        echo "<p><b>Nombre:</b> $nombre $apellido<br>";
        echo "<b>Email:</b> $email<br>";
    } else {
        echo "<p>Error al registrar al usuario</p>";
    }
}
$conexion->close();
?>