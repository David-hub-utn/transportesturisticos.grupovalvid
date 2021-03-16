<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if ($varsesion == null || $varsesion = '') {
    echo 'Tu no eres miembro de transportes turisticos grupo VALVID';
    die();
}
?>
<html>
  <head>
    <title>Editar destinos</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link href="../images/favicon.ico" rel="icon" type="image/x-icon">
  </head>
  <body>
<?php include "navbar.php";?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
    <h1>Editar destino</h1>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
<!--Aquí empieza el formulario -->
<?php

$des_ID = $_REQUEST['des_ID'];
include "conn.php";

$query  = "SELECT * FROM destinos_table WHERE des_ID='$des_ID'";
$callSP = $conn->query($query);
$row    = $callSP->fetch_assoc();
?>
    <form enctype="multipart/form-data" action="modificar_proceso_des.php?des_ID=<?php echo $row['des_ID']; ?>" method="POST"">

  <div class="form-group">
    <label for="exampleInputPassword1">Titulo del destino</label>
    <input type="text"
    value="
<?php echo $row['des_NAME']; ?>"
    name="titulo"
    class="form-control"
    >
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Descripción del destino</label>

  <textarea  name="descripcion"   maxlength="1000" cols="160" rows="10" value="
<?php echo $row['des_DESCRIPTION']; ?>" >
<?php echo $row['des_DESCRIPTION']; ?> </textarea>
    </div>
  <div class="form-group">
    <br>

<label for="exampleInputPassword1">Tipo de destino</label>
<select id="tipo" name="tipo">
 <option value="<?php echo $row['des_TYPE']; ?>" SELECTED="<?php echo $row['des_TYPE']; ?>"><?php echo $row['des_TYPE']; ?></option>
  <option value="pueblos">Pueblos Mágicos</option>
  <option value="religioso">Religioso</option>
  <option value="playa">Playa</option>
  <option value="recreativo">Recreativo</option>
  <option value="aventura">Aventura</option>
  <option value="negocio">Negocios</option>
  <option value="cultura">Cultura</option>
</select>

  </div>



    <input type="submit" value="Actualizar destino" class="btn btn-primary">
    </form>
  </div>
</div>
</div>

  </body>




</html>
