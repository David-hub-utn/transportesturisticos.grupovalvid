<?php
session_start();

$usuario             = $_POST['usuario'];
$clave               = $_POST['clave'];
$_SESSION['usuario'] = $usuario;

$conexion = mysqli_connect("localhost", "id12957852_root", "12345678", "id12957852_destinos");

$consulta = "SELECT * FROM usuarios WHERE user_NAME=
'$usuario' AND user_PASSWORD=md5('$clave');";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {

    header("location:http://gammatt.grupovalvid.com/admi_des");
    //http://localhost/20190405/destino/admi_des.php

} else {
    header("location: http://gammatt.grupovalvid.com/login_fail");
}
mysqli_free_result($resultado);
mysqli_close($conexion);
