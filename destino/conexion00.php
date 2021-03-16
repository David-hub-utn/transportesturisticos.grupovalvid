<?php 
	$hostname="localhost";
	$username="root";
	$password="12345678";
	$database="destinos";

	$conexion00=mysql_connect($hostname,$username,$password);

	mysql_select_db($database,$conexion00);

 ?>