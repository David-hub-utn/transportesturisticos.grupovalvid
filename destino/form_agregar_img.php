<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion=''){
  echo 'Tu no eres miembro de transportes turisticos grupo VALVID';
  die();
  $des_ID=$_REQUEST['des_ID'];
}
?>
<html>
	<head>
		<title>Subir imagen</title>
	  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	</head>
	<body>
<?php include("navbar.php");?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">		
		<h1>Subir nueva imagen</h1>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
<!--Aquí empieza el formulario -->
		<form enctype="multipart/form-data" method="post" action="agregar_img_proceso.php">


   <div class="form-group">
    <label for="exampleInputFile">Imagen</label>
    <input type="file" name="imagen[]" required>
    <input type="text"  name="img" class="form-control"  placeholder="Inserte el texto alternativo de la imagen">
     <input type="hidden" id="destino_ID" name="destino_ID" value="<?php $des_ID=$_REQUEST['des_ID']; echo $des_ID ?>">
  </div>
 


		<input type="submit" value="Subir imagen" class="btn btn-primary">
		</form>
	</div>
</div>
</div>

	</body>

</html>
