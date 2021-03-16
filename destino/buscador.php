<?php
echo '<html>
	<head>
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
	 <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	 
		<div class="container">
			<div class="row">
				<div class="col-md-12">
		';
		
		echo '<a href="admi_des.php">Regresar a lista general</a>
	';
include 'conn.php';

if ($_GET['buscador'])
{

$buscar = $_GET['palabra'];

if (empty($buscar))
{
echo "No se ha ingresado ninguna palabra";
}
else
{

               

               
$sql = mysqli_query($conn,"SELECT * FROM destinos_table WHERE des_NAME LIKE '%$buscar%' or des_TYPE LIKE '%$buscar%' or des_ID LIKE '%$buscar%' or des_DESCRIPTION LIKE '%$buscar%'");




if ($row = mysqli_fetch_array($sql)) {

echo "Resultados para: $buscar";


do {
echo 
' 
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
				<td style="width: 375px;">';
				
				     include "conn.php";
	$querySS = mysqli_query($conn,"SELECT * FROM imagenes where img_des_ID=$l");
               

                while ( $rowS = mysqli_fetch_array ( $querySS ) )
                
                    {
    

					
	    echo    '<div style="display:inline-block;"> <img src=" ';
	         echo $rowS['img_NAME'];  
	      echo  ' "style=" width: 155px; height: 100px;"></div>';
                    
				
					
                    } 
        echo '<p><p>';
				
				   
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
				<a class="btn btn-danger" onclick="return ConfDelete()" href="eliminar_des.php?des_ID=';
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


</body>

</html>';




?>
<?php

}
while ($row = mysqli_fetch_array($sql));
}
else
{

include "Metodo_Prueba.php";
administrar();
echo '<script>alert("No hay resultados para esta búsqueda");</script>';
//header ('location: https://ttgvalvid.000webhostapp.com/destino/u.php');

}
}
}
?>
