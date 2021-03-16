<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion=''){
  echo 'Tu no eres miembro de transportes turisticos grupo VALVID';
  die();
}
?>
<html>
	<head>
		<title>Reemplazar imagen</title>
	  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	</head>
	<body>
<?php include("navbar.php");?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">		
		<h1>Reemplazar imagen</h1>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
<!--Aquí empieza el formulario -->
<?php
    
    $img_ID=$_REQUEST['imgs_ID'];
        include("conn.php");

        $query="SELECT * FROM imagenes WHERE img_ID='$img_ID'";
        $callSP=$conn->query($query);
        $row=$callSP->fetch_assoc();
?>
		<form enctype="multipart/form-data" action="modificar_img_proceso.php?img_ID=<?php echo $row['img_ID']; ?>" method="POST"">

  <div class="form-group">
    <label for="exampleInputPassword1">Elegir nueva imagen</label>
    <input type="file" name="nombre[]" required >
    <br>
    <input type="text" name="texto" value="<?php echo $row['img_TEXT']; ?>" > También puedes modificar el texto de la imagen o dejarlo como está actualmente.
    <br><br>
    <input type="hidden" id="des_ID" name="des_ID" value="<?php echo $row['img_des_ID']; ?>">
    <img src="<?php echo $row['img_NAME']; ?>"style=" width: 400px; height: 290px;">"
  </div>
  



		<input type="submit" value="Actualizar imagen" class="btn btn-primary">
		</form>
	</div>
</div>
</div>

	</body>




</html>
