<?php
include("conn.php");

$des_ID=$_REQUEST['des_ID'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$tipo=$_POST['tipo'];



 


$query="UPDATE destinos_table SET des_NAME='$titulo' ,des_DESCRIPTION='$descripcion', des_TYPE= '$tipo' WHERE des_ID='$des_ID'";

$callSP=$conn->query($query);

if($callSP){
/*header ("location: https://ttgvalvid.000webhostapp.com/destino/admi_des.php?des_ID=$des_ID");
*/

//header ("location: https://ttgvalvid.000webhostapp.com/destino/admi_des.php");
header ("location: https://ttgv.000webhostapp.com/destino/modificar_des.php?des_ID=$des_ID");
//header ("location: https://ttgvalvid.000webhostapp.com/destino/buscador.php?palabra=$descripcion&buscador=Buscar");
}

else{
header ("location: https://ttgv.000webhostapp.com/destino/admi_des.php");
}






?>