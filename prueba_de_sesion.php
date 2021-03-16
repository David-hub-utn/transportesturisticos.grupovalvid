<?php
session_start();
?>
 
<html >
	<head>
		<title>Check Login and create session</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="../../../assets/css/main.css" />
		<script src="https://code.jquery.com/jquery-3.0.0.js"></script><!--Validaciones-->
		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script><!--Validacioness-->


		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body >
	
		<div class="container">
		
			<?php
			// Connection info. file
			include 'conn.php';	


			// Connection variables
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			// data sent from form login.php
			$LOG_USER = $_POST['usuario']; 
		
			$LOG_PASSWORD = $_POST['clave'];
		

			// Query sent to database
			//$result = "SELECT * FROM login, prestador WHERE LOG_USER = '$LOG_USER' AND LOG_PASSWORD=AES_ENCRYPT('$LOG_PASSWORD', (SELECT prestador.PRE_CLAVE FROM prestador WHERE prestador.PRE_MATRICULA='$LOG_USER'))";ESTE NO SIRVE
			//$result ="SELECT * FROM login, prestador WHERE PRE_MATRICULA='$LOG_USER' AND LOG_USER='$LOG_USER' AND LOG_PASSWORD= AES_ENCRYPT('$LOG_PASSWORD', LOG_CLAVE)";
			$result="SELECT * FROM usuarios WHERE user_NAME='$LOG_USER' AND user_PASSWORD =md5('$LOG_PASSWORD');";
		
			//$result = "SELECT * FROM prestador WHERE PRE_MATRICULA = '$LOG_USER' AND PRE_PASSWORD=AES_ENCRYPT('$LOG_PASSWORD', (SELECT PRE_CLAVE FROM prestador WHERE PRE_MATRICULA='$LOG_USER'))";ESTE NO SIRVE
			$resultado=mysqli_query($conn, $result);
			// Variable $row hold the result of the query
			$row = mysqli_fetch_assoc($resultado);
			$count = mysqli_num_rows($resultado);
		
			// If count == 1 that means the email is already on the database
			if ($count == 1) {	
				
				/*$_SESSION['loggedin'] = true;
				$_SESSION['name'] = $row['user_NAME'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1*60) ;	*/
				//$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;	 ESTA ES LA ORGINAL X MINUTO
				session_start();
				session_name("loginUsuario");
    // inicio la sesión
    $_SESSION["autentificado"]= "SI";
    //defino la sesión que demuestra que el usuario está autorizado
    $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
    //defino la fecha y hora de inicio de sesión en formato aaaa-mm-dd hh:mm:ss
    header ("Location: http://localhost/20190405/destino/a.php");					
				
				//echo "HOLA Angy";
			} else {
				echo "<div class='alert alert-danger mt-4' role='alert'>El usuario o contraseña es incorrecto, favor de verificar.
				<p><a href='../index.php'><strong>Por favor intenta de nuevo o contacta al administrador</strong></a></p></div>";			
			}	
			?>
		</div>
		<!-- Optional JavaScript -->

	</body>
</html>
       