<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion=''){
	echo 'Tu no eres miembro de transportes turisticos grupo VALVID';
	die();
}



?>
<?php include("navbar.php");?>
<?php
function imagenes(){
    

echo '<html>
	<head>
		<title>Editar imagenes</title>
		  <link href="../images/favicon.ico" rel="icon" type="image/x-icon">
		  <link href="../images/favicon.ico" rel="icon" type="image/x-icon">
		  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
		  
	<script type="text/javascript">
	function ConfDelete()
	{
	    var respuesta = confirm("¿Seguro que quiere eliminar la imagen?");
	    if(respuesta == true){
	    alert("Imagen eliminada");
	        return true;
	           



	        
	    }
	    else{
	        return false;
	    }
	}
	</script>
	</head>
	<body>


		<div class="container">
			<div class="row">
				<div class="col-md-12">';
						
			$img_ID=$_REQUEST['des_ID'];
				     include "conn.php";
	$querySSS = mysqli_query($conn,"SELECT * FROM destinos_table where des_ID=$img_ID");
               

                while ( $rowSS = mysqli_fetch_array ( $querySSS ) )
                
            { 
            echo '
            <br><p></p>
            <link href="../images/favicon.ico" rel="icon" type="image/x-icon">
           <!-- <a href="cerrar_sesion.php">Regresar al destino</a>-->
		<h1>Imágenes del destino :'; echo  $rowSS['des_NAME']; echo '</h1>
	<br><p></p>
		<br>
		<a href="form_agregar_img.php?des_ID='; echo $rowSS['des_ID']; echo ' " class="btn btn-default">Agregar imagen</a>' ;
			 } 
			 echo '
		<br><br>
		
				<table class="table table-bordered">
					<thead>
						<th>Imagen</th>
						<th>Texto alternativo</th>
                        <th>Acciones</th>
					</thead>';
 
		

				
			$img_ID=$_REQUEST['des_ID'];
				     include "conn.php";
	$querySS = mysqli_query($conn,"SELECT * FROM imagenes where img_des_ID=$img_ID");
               

                while ( $rowS = mysqli_fetch_array ( $querySS ) )
                
                    {
    echo '
    	<tr>
				<td style="width: 420px;">
				   
                    	&nbsp;<div style="width:100px;width: 40px;">
					<!--&nbsp;<div style="max-width:100px;min-width: 40px; display:inline-block;"> style=" width: 155px; height: 100px;-->
				<img src="'; echo  $rowS['img_NAME']; echo '"style=" width: 400px; height: 300px;">
					</div>
					<p></p>					<p></p>					<p></p>
				
                    
				
				</td>
					

<td style="width:280px min-width:50px";>'; echo $rowS['img_TEXT']; echo '</td>
				    
								<td  style="width: 130px;">
									&nbsp;
				<!--<a class="btn btn-success" href="agregar_texto.php?img_ID=-->'; //echo $rowS['img_ID'];
				echo '<!--">Agregar texto</a>
				<br> <br>
				-->
				<a class="btn btn-primary"  href="modificar_img_form.php?imgs_ID='; echo $rowS['img_ID']; echo '">Reemplazar</a>
				<br>	<br>

			<!--	&nbsp;-->
			&nbsp;
				<a class="btn btn-danger" href="eliminar_img.php?imgs_ID='; echo $rowS['img_ID']; echo'" onclick="return ConfDelete()
	;">Borrar</a>';
	
echo	'<br>	<br>

			</td>';
					
                    } 

				
	echo'		

				</tr>

			</th>

		</thead>';
			
echo '</div>';
echo '</div>';
echo '</div>';
echo '<a href="cerrar_sesion.php">Cerrar sesión</a>';
echo '</body>';

echo '</html>';
}
imagenes();
?>
