<?php

$text1=$_POST["img"];
$des_ID=$_POST['destino_ID'];
$num_archivos=count($_FILES['imagen']['name']);
 for($i=0; $i<=$num_archivos; $i++){

 	if(!empty($_FILES['imagen']['name'][$i])){
 		$ruta_nueva = "uploads/".$_FILES['imagen']['name'][$i];
 		if(file_exists($ruta_nueva)){
 			//echo "El archivo".$_FILES['imagen']['name'][$i]."ya se encuentra en el servidor";
 		}
 		else{
 			$ruta_temporal=$_FILES['imagen']['tmp_name'][$i];
 			move_uploaded_file($ruta_temporal,$ruta_nueva);
 		}
 	}
 }
$imagen= "uploads/".$_FILES['imagen']['name'][0];



             

                   
                    $servername = "localhost";
                    $username = "id12957852_root";
                    $password = "12345678";
                    $dbname = "id12957852_destinos";
                    
                  
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    


$sql="CALL SP_imagenes_ins (NULL,'$des_ID','$imagen','$text1')";
$llenar=mysqli_query($conn,$sql);
if($llenar){


header ("location: https://ttgv.000webhostapp.com/destino/modificar_img.php?des_ID=$des_ID");
//https://ttgvalvid.000webhostapp.com/destino/modificar_img.php?des_ID=%20%20%20%209

}

else{
header ("location: https://ttgv.000webhostapp.com/destino/admi_des.php");
}






?>