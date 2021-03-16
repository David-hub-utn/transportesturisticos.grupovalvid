<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion=''){
	echo 'Tu no eres miembro de transportes turisticos grupo VALVID';
	die();
}


?>
<?php

    


include("conn.php");
$img_ID=$_REQUEST['imgs_ID'];



$query="DELETE FROM imagenes WHERE img_ID=$img_ID";
            
             include("conn.php");
$img_ID=$_REQUEST['imgs_ID'];

	$queryS = mysqli_query($conn,"SELECT * FROM imagenes where img_ID='$img_ID'");
               

                while ( $row = mysqli_fetch_array ( $queryS ) )
                
                    {
                               $di=($row['img_des_ID']);
       unlink($row['img_NAME']);

       
    }



$callSP=$conn->query($query);

if($callSP){
/*echo '
<script>
alert("Imagen eliminada");
</script>
';*/
//include "modificar_img.php";
//imagenes();
header ("location: https://ttgv.000webhostapp.com/destino/modificar_img.php?des_ID='$di'");
/*echo '
<script>
alert("Imagen eliminada");
</script>
';*/
//include "Metodo_Prueba.php";
//administrar();
/*
header ("location: https://ttgvalvid.000webhostapp.com/destino/admi_des.php");*/


}

else{
   // include "modificar_img.php";
    //imagenes();
    echo "err";
   // header ("location: https://ttgvalvid.000webhostapp.com/destino/admi_des.php");
    //echo "Insercción fallida";   
}


?>