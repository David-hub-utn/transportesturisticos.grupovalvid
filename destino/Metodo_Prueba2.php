<?php
function admi(){
    
echo 
'<html>
	<head>
		<title>Subir nuevo destino</title>

		  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

	</head>
	<body>


		<div class="container">
			<div class="row">
				<div class="col-md-12">
		<h1>Destinos</h1>
		<a href="./form_prueba" class="btn btn-default">Agregar destino</a> 
		<br><br>
		
				<table class="table table-bordered">
					<thead>
						<th>Imagen</th>
						<th>Título del Destino</th>
						<th>Descripción</th>
						<th>Acciones</th>
					</thead>';
  

                    $l=$row['des_ID'];
    
	echo 	
	'<tr>
				<td style="width: 335px;">';
				
				     include "config.php";
	$querySS = mysqli_query($connect,"SELECT * FROM imagenes where img_des_ID=$l and mod(img_ID,2) = 0");
               

                while ( $rowS = mysqli_fetch_array ( $querySS ) )
                
                    {
    

					
	    echo    ' <img src=" ';
	         echo $rowS['img_NAME'];  
	      echo  ' "style=" width: 155px; height: 100px;">';
                    
				
					
                    } 
        echo '<p><p>';
				
				     include "config.php";
	$querySSS = mysqli_query($connect,"SELECT * FROM imagenes where img_des_ID=$l and mod(img_ID,2) <> 0");
               

                while ( $rowSS = mysqli_fetch_array ( $querySSS ) )
                
                    {
    
                   
			echo	'<img src="';
					 echo $rowSS['img_NAME']; 
			 echo	'"style=" width: 155px; height: 100px;">';
                   
				   
					
					
                    }
                    
	
		echo '</td>
				
				<td style="width:80px;">';
				echo $row['des_NAME'];
			echo '	</td>
				<td style="width:600px";>';
				    echo $row['des_DESCRIPTION'];
		echo ' </td>

				<td  style="width: 90px;">
				&nbsp;
				<a class="btn btn-primary"  href="modificar_des.php?des_ID=';
				echo $row['des_ID'];
				echo '">Editar</a>
				<br>	<br>
				&nbsp;
				<a class="btn btn-danger" href="eliminar_des.php?des_ID=
				';
                echo $row['des_ID']; echo '">Borrar</a>
				<br>	<br>
			    <a class="btn btn-warning"  href="modificar_img.php?des_ID=
			    ';
			    echo $row['des_ID']; 
			    echo '">Imágenes</a>
			</td>
				</tr>
			
        
        

			</th>
		</thead>
			
</div>
</div>
</div>



</html>';


echo '<a href="cerrar_sesion.php">Cerrar sesión</a>
	</body>';

}
?>