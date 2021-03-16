<?php
function administrar(){
    


echo 
'<html>
	<head>
		<title>Administrador de Galería</title>

		  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
		  <link href="../images/favicon.ico" rel="icon" type="image/x-icon">

	</head>
	<body background="../images/ben1.jpg">
	<script type="text/javascript">
	function ConfDelete()
	{
	    var respuesta = confirm("¿Seguro que quieres eliminar el destino?");
	    if(respuesta == true){
	        return true;
	    }
	    else{
	        return false;
	    }
	}
	</script>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
		<h1>Destinos</h1><br>
		<a align="left" href="./form_prueba" class="btn btn-default" display:inline-block;>Agregar destino</a><br>
<div align="right" display:inline-block;>
	<form action="buscador.php" method="get">
<input type="text" name="palabra" value="" placeholder="...ingresa palabra clave..."  />
<input type="submit" name="buscador" value="Buscar"  />
</form><a href="cerrar_sesion.php">Cerrar sesión</a>
</div>
<br>

		
		
				<table class="table table-bordered">
					<thead style="background-color:#F0CC28;">
						<th>Imágenes</th>
						<th>Nombre del Destino</th>
						<th>Tipo</th>
						<th>Descripción</th>
						<th>Acciones</th>
					</thead>';
  
             include "conn.php";
	$queryS = mysqli_query($conn,"SELECT * FROM destinos_table");
               

                while ( $row = mysqli_fetch_array ( $queryS ) )
                
                    {
                    $l=$row['des_ID'];
    
	echo 	
	'<tr>
				<td style="width: 375px; background-color:white;">';
				
				     include "conn.php";
	//$querySS = mysqli_query($conn,"SELECT * FROM imagenes where img_des_ID=$l and mod(img_ID,2) = 0");
               $querySS = mysqli_query($conn,"SELECT * FROM imagenes where img_des_ID=$l");

                while ( $rowS = mysqli_fetch_array ( $querySS ) )
                
                    {
    

					
	    echo    '<div style="display:inline-block; background-color:white;"><img src=" ';
	         echo $rowS['img_NAME'];  
	      echo  ' "style=" width: 155px;  height: 100px;"></div>';
                    
				
					
                    } 
        echo '<p><p>';
				
		/*		     include "conn.php";
	$querySSS = mysqli_query($conn,"SELECT * FROM imagenes where img_des_ID=$l and mod(img_ID,2) <> 0");
               

                while ( $rowSS = mysqli_fetch_array ( $querySSS ) )
                
                    {
    
                   
			echo	'<img src="';
					 echo $rowSS['img_NAME']; 
			 echo	'"style=" width: 155px; height: 100px;">&nbsp;';
                   
				   
					
					
                    } */
                    
	
		echo '</td>
				
				<td style="width:80px; color: black; background-color:white;">';
				echo $row['des_NAME'];
			echo '	</td>
				<td style="width:80px; color: black; background-color:white;">';
				echo $row['des_TYPE'];
			echo '	</td>
				<td ALIGN="justify" style="width:600px; color: black; background-color:white;">';
				    echo $row['des_DESCRIPTION'];
		echo ' </td>

				<td  style="width: 90px; background-color:white;">
				
				<a class="btn btn-primary"  href="modificar_des.php?des_ID='; echo $row['des_ID'];
				echo '">Editar</a>
				<br>	<br>
				
				<a class="btn btn-danger" onclick="return ConfDelete()" href="eliminar_des.php?des_ID=
				';
                echo $row['des_ID']; echo '">Borrar</a>
				<br>	<br>
			    <a class="btn btn-warning"  href="modificar_img.php?des_ID=';
			    echo $row['des_ID']; 
			    echo '">Imágenes</a>
			    <br>	<br>
			    <a target="_blank" class="btn btn-info"  href="';
			    echo $row['des_ID']; 
			    echo '">Ver galería</a>
			</td>
				</tr>
			
        
        

			</th>
		</thead>
			
</div>
</div>
</div>



</html>';

}
echo '
	</body>';
}

?>
