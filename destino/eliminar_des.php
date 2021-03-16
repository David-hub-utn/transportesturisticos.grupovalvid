
<?php

include("conn.php");
$des_ID=$_REQUEST['des_ID'];



$query="DELETE FROM destinos_table WHERE des_ID='$des_ID'";
            
             include 'conn.php';
	$queryS = mysqli_query($conn,"SELECT * FROM imagenes where img_des_ID='$des_ID'");
               

                while ( $row = mysqli_fetch_array ( $queryS ) )
                
                    {
       unlink($row['img_NAME']);
         
    
    }

$archivo=$des_ID.'.php';
unlink($archivo);


$callSP=$conn->query($query);

if($callSP){
echo '
<script>
alert("Destino eliminado");
</script>
';
include "Metodo_Prueba.php";
administrar();
/*
header ("location: https://ttgvalvid.000webhostapp.com/destino/admi_des.php");*/


}

else{
    header ("location: https://ttgvalvid.000webhostapp.com/destino/admi_des.php");
    echo "Insercción fallida";   
}
?>