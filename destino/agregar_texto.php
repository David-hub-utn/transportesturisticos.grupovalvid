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
		<title>Editar destinos</title>
	  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	</head>
	<body>
<?php include("navbar.php");?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">		
		<h1>Agregar texto</h1>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
<!--Aquí empieza el formulario -->
<?php
    
    $img_ID=$_REQUEST['img_ID'];
        include("conn.php");

        $query="SELECT * FROM imagenes WHERE img_ID='$img_ID'";
        $callSP=$conn->query($query);
        $row=$callSP->fetch_assoc();
?>
		<form enctype="multipart/form-data" action="agregar_text_proceso.php?img_ID=<?php echo $row['img_ID']; ?>" method="POST"">

  <div class="form-group">
    <label for="exampleInputPassword1">Escriba el texto</label>
    <input type="text"
    value=" <?php echo $row['img_TEXT'];?>" name="titulo" class="form-control"  
    >
  </div>
   
    <br>





		<input type="submit" value="Agregar texto" class="btn btn-primary">
		</form>
	</div>
</div>
</div>

	</body>




</html>
