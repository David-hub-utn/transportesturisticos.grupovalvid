<?PHP

$host = "localhost"; 	//TU HOST//
$dbuser = "id12680122_root";	 	//TU USUARIO DEL HOST//
$dbpwd = "12345678";	//TU CONTRASEÑA//
$db = "id12680122_destinos";		//TU BASE DE DATOS//

$connect = mysql_connect ($host, $dbuser, $dbpwd);
if(!connect)
echo ("No se pudo conectar a la base de datos");
else
$select = mysql_select_db($db);
?>