<?php
//error_reporting(0);
$titulo=$_POST["titulo"];
$descripcion=$_POST["descripcion"];
$tipo=$_POST["tipo"];
//$id=$_POST["des_id"];

 $num_archivos=count($_FILES['imagen']['name']);
 for($i=0; $i<=$num_archivos; $i++){

 	if(!empty($_FILES['imagen']['name'][$i])){
 		$ruta_nueva = "uploads/".$_FILES['imagen']['name'][$i];
 		if(file_exists($ruta_nueva)){
 			echo "El archivo".$_FILES['imagen']['name'][$i]."ya se encuentra en el servidor";
 		}
 		else{
 			$ruta_temporal=$_FILES['imagen']['tmp_name'][$i];
 			move_uploaded_file($ruta_temporal,$ruta_nueva);
 		}
 	}
 }
$imagen= "uploads/".$_FILES['imagen']['name'][0];
$imagen1="uploads/".$_FILES['imagen']['name'][1];
$imagen2="uploads/".$_FILES['imagen']['name'][2];
$imagen3="uploads/".$_FILES['imagen']['name'][3];

                 /*   $servername = "localhost";
                    $username = "id12680122_root";
                    $password = "12345678";
                    $dbname = "id12680122_destinos";
                    
                  
                    $conn = new mysqli($servername, $username, $password, $dbname);*/
                    // Check connection
                    include "conn.php";
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    
$sql="CALL SP_destinos_ins('NULL','$titulo','$tipo','$descripcion','$imagen','$imagen1','$imagen2','$imagen3')";


                    if ($conn->query($sql) === TRUE) { 
                       
//Aquí obtenemos el ultimo valor de mysql
$servername = "localhost";
$username = "id12680122_root";
$password = "12345678";
$dbname = "id12680122_destinos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sqll = "SELECT des_ID FROM destinos_table ORDER BY des_ID DESC LIMIT 1;";
$result = $conn->query($sqll);

if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {
        
        $id=$row["des_ID"];
        
 
$conn->close();


$files=fopen("$id.php", "a");
fwrite($files, "
<!DOCTYPE>
<html>
  <head>
  	<link href='styles.css' rel='stylesheet' type='text/css' media='all' />
  </head>
  <body>
  		<a href='http://localhost/20190405/album.php' style='color:#20F10C';>Regresar a Destinos y Turismo</a>
      
         <h1 style='color:#EB5273; font-size: 22px;'><br><?php echo '$titulo'; ?></h1>
        <BR>
        
         <h2 style='color:#04E6FC; text-align: justify;margin-left: 150px; margin-right: 150px; font-size: 20px;'>


<?php echo '$descripcion'; ?>
</h2>

<div>
       <ul class='galeria'>
        <li><a href='#img1'><img src='  <?php echo '$imagen'; ?>'></a></li>
        <li><a href='#img2'><img src='  <?php echo '$imagen1'; ?>'></a></li>
        <li><a href='#img3'><img src='  <?php echo '$imagen2'; ?>'></a></li>
        <li><a href='#img4'><img src='  <?php echo '$imagen3'; ?>'></a></li>
    </ul>
            
     <div class='modal' id='img1'>
        <h3>Paisaje 1</h3>
        <div class='imagen'>
            <a href='#img4'>&#60;</a>
            <a href='#img2'><img src='  <?php echo '$imagen'; ?>'></a>
            <a href='#img2'>></a>
        </div>
        <a class='cerrar' href=''>X</a>
    </div>
    
    <div class='modal' id='img2'>
        <h3>Paisaje 2</h3>
        <div class='imagen'>
            <a href='#img1'>&#60;</a>
            <a href='#img3'><img src='  <?php echo '$imagen1'; ?>'></a>
            <a href='#img3'>></a>
        </div>
        <a class='cerrar' href=''>X</a>
    </div>
    
    <div class='modal' id='img3'>
        <h3>Paisaje 3</h3>
        <div class='imagen'>
            <a href='#img2'>&#60;</a>
            <a href='#img4'><img src='  <?php echo '$imagen2'; ?>'></a>
            <a href='#img4'>></a>
        </div>
        <a class='cerrar' href=''>X</a>
    </div>
    
    <div class='modal' id='img4'>
        <h3>Paisaje 4</h3>
        <div class='imagen'>
            <a href='#img3'>&#60;</a>
            <a href='#img1'><img src='  <?php echo '$imagen3'; ?>'></a>
            <a href='#img1'>></a>
        </div>
        <a class='cerrar' href=''>X</a>
    </div>
</div>
  </body>
</html>
	");
   }
} 
header("location:https://ttgvalvid.000webhostapp.com/destino/admi_des.php");
}

else{
    echo "Insercción fallida";   
}




//pa



?>