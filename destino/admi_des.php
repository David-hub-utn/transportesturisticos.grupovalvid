<?php

session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion=''){
	echo 'Tu no eres miembro de transportes turisticos grupo VALVID';
	die();
}

include "Metodo_Prueba.php";
Administrar();
?>