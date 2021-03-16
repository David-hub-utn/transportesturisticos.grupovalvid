<?php
include("conn.php");
$text=$_POST['texto'];
$des_ID=$_POST['des_ID'];
$img_ID=$_REQUEST['img_ID'];
//$nombre=$_POST['nombre'];
/*$descripcion=$_POST['descripcion'];
$tipo=$_POST['tipo'];*/
 $num_archivos=count($_FILES['nombre']['name']);
 for($i=0; $i<=$num_archivos; $i++){

 	if(!empty($_FILES['nombre']['name'][$i])){
 		$ruta_nueva = "uploads/".$_FILES['nombre']['name'][$i];
 		if(file_exists($ruta_nueva)){
 			//echo "El archivo".$_FILES['imagen']['name'][$i]."ya se encuentra en el servidor";
 		}
 		else{
 			$ruta_temporal=$_FILES['nombre']['tmp_name'][$i];
 			move_uploaded_file($ruta_temporal,$ruta_nueva);
 		}
 	}
 }
$imagen= "uploads/".$_FILES['nombre']['name'][0];



 


$query="UPDATE imagenes SET img_NAME='$imagen',img_TEXT='$text' WHERE img_ID='$img_ID'";

$callSP=$conn->query($query);

if($callSP){


header ("location: https://ttgv.000webhostapp.com/destino/modificar_img.php?des_ID=$des_ID");
//https://ttgvalvid.000webhostapp.com/destino/modificar_img.php?des_ID=%20%20%20%209

}

else{
header ("location: https://ttgv.000webhostapp.com/destino/admi_des.php");
}






?>