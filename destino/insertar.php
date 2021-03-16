<?php
$vari="$"."row['img_NAME'];";
$vari2="$"."rowS['des_NAME'];";
$vari3="$"."rowS['des_DESCRIPTION'];";

$alt="$"."row['img_TEXT'];";

$vari4="$"."_SERVER['HTTP_USER_AGENT']";
$vari5="$"."_SERVER['HTTP_ACCEPT']";
$vari6="$"."_SERVER['HTTP_PROFILE']";
$vari7="$"."_SERVER['HTTP_X_WAP_PROFILE']";

$vari8="$"."_SERVER['HTTP_X_OPERAMINI_PHONE_UA']";
$vari9="$"."_SERVER['HTTP_DEVICE_STOCK_UA']";
$vari10="$"."tablet_browser = 0;";
$vari11="$"."mobile_browser = 0;";
$vari12="$"."tablet_browser++;";
$vari13="$"."mobile_browser++;";
$vari14="$"."mobile_ua";
$vari15="$"."tablet_browser";
$vari16="$"."mobile_agents";
$vari17="$"."mobile_browser";
$vari18="$"."stock_ua";








$titulo=$_POST["titulo"];
$descripcion=$_POST["descripcion"];
$tipo=$_POST["tipo"];
$text1=$_POST["img1"];
$text2=$_POST["img2"];
$text3=$_POST["img3"];
$text4=$_POST["img4"];
$imag="";
$a="$"."queryS";
$b="$"."row";
$aa="$"."querySS";
$bb="$"."rowS";
$c="$"."conn";


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
$imagen1="uploads/".$_FILES['imagen']['name'][1];
$imagen2="uploads/".$_FILES['imagen']['name'][2];
$imagen3="uploads/".$_FILES['imagen']['name'][3];

/*$sql="CALL SP_destinos_ins(NULL,'$titulo','$tipo','$descripcion','$imagen','$imagen1','$imagen2','$imagen3')";
$sql="CALL SP_destinos_ins
(NULL,
'$titulo','$tipo','$descripcion','$imagen','$imagen1','$imagen2','$imagen3','$text1','$text2','$text3','$text4')";*/
             

                   
                    $servername = "localhost";
                    $username = "id12957852_root";
                    $password = "12345678";
                    $dbname = "id12957852_destinos";
                    
                  
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    

/*  $sql="CALL SP_destinos_ins
(NULL,
'$titulo','$tipo','$descripcion','$imagen','$imagen1','$imagen2','$imagen3','$text1','$text2','$text3','$text4')";                 
$sql="CALL SP_destinos_ins(NULL,'$titulo','$tipo','$descripcion','$imagen','$imagen1','$imagen2','$imagen3','$text1','$text2','$text3','$text4')";
$sql="CALL SP_destinos_ins(NULL,'$titulo','$tipo','$descripcion','$imagen','$imagen1','$imagen2','$imagen3')";*/
$sql="CALL SP_destinos_ins
(NULL,
'$titulo','$tipo','$descripcion','$imagen','$imagen1','$imagen2','$imagen3','$text1','$text2','$text3','$text4')";
$llenar=mysqli_query($conn,$sql);
if($llenar){
$servername = "localhost";
$username = "id12957852_root";
$password = "12345678";
$dbname = "id12957852_destinos";

// Create connection
$connn = new mysqli($servername, $username, $password, $dbname);  

$sqla = "SELECT des_ID FROM destinos_table ORDER BY des_ID DESC LIMIT 1";
$result = $connn->query($sqla);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row["des_ID"]; 

        //echo $id;
    }
} else {
    echo "0 results";
}


$files=fopen("$id.php", "a");
fwrite($files, "

<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link href='../images/favicon.ico' rel='icon' type='image/x-icon'>
        <?php
$vari10
$vari11
 
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($vari4))) {
    $vari12
}
 
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($vari4))) {
    $vari13
}
 
if ((strpos(strtolower($vari5),'application/vnd.wap.xhtml+xml') > 0) or ((isset($vari7) or isset($vari6)))) {
    $vari13
}
 
$vari14 = strtolower(substr($vari4, 0, 4));
$vari16 = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($vari14,$vari16)) {
    $vari13
}
 
if (strpos(strtolower($vari4),'opera mini') > 0) {
    $vari13
    //Check for tablets on opera mini alternative headers
    $vari18 = strtolower(isset($vari8)?$vari8:(isset($vari9)?$vari9:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $vari18)) {
      $vari12
    }
}
 
if ($vari15 > 0) {?>
<link rel='stylesheet' href='desing/css/app.css'>
<?php }
else if ($vari17 > 0) {?>
<link rel='stylesheet' href='desing/css/app.css'>
<?php }
else { ?>
<link rel='stylesheet' href='desing/css/app2.css'>
<?php }   
 
?>
                <?php
             include 'conn.php';
	$aa = mysqli_query($c,'SELECT * FROM destinos_table where des_ID=$id');
               

                while ( $bb = mysqli_fetch_array ( $aa ) )
                
                    {
    ?>
    <title><?php echo $vari2; ?></title>
    <link rel='stylesheet' href='desing/css/icons.css'>

<link rel='stylesheet' href='../css/bootstrap.css'>
<link rel='stylesheet' href='../css/style.css' type='text/css' media='all' /> 
<link rel='stylesheet' href='../css/style1.1.css' type='text/css' media='all' />


</head>
<body style=' background-color:white;'>
    <div >
    <nav class='navbar navbar-default'>
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class='navbar-header'>
		<button type='button' class='navbar-toggle collapsed navbar-toggle1' data-toggle='collapse' data-target='#bs-megadropdown-tabs'>Menu
			<span class='sr-only'>Toggle navigation</span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
		</button>
	</div>
			
	<div class='collapse navbar-collapse' id='bs-megadropdown-tabs'>
		<ul>
			<li>
				<a href='../index' class='active'>Inicio</a>
			</li>
			<li>
				<a href='../formulario' class='active'>Contacto</a>
			</li>
						<li>
				<a href='../gallery' class='active'>Regresar</a>
			</li>
		</ul>
		<br>
	</div>

</nav>
   </div> 
  
      <div style='margin-left: 20px; margin-right: 5px;text-align: center;'>
         <h1 style='color:#EB5273; font-size: 30px font-family:'Barlow Condensed', sans-serif text-align: center;'><br>		<div class='mt-5 row d-flex align-items-center justify-content-center'><?php echo $vari2; ?></div> <br></h1><a href='#galeria' class='scroll'>Fotos</a>  </div>  
        <BR>
    <div style='margin-left: 20px; margin-right: 20px;'>
         <p style='color:black; text-align: justify; margin-left: 20px; margin-right: 20px; font-size: 18px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;line-height:24px;'>


<?php echo $vari3; ?>
</p></div>
    <?php
    }
    ?>
<div id='galeria'>
    <div class='root' align='center'>
        <div class='gallery' align='center'>
            <?php
             include 'conn.php';
	$a = mysqli_query($c,'SELECT * FROM imagenes where img_des_ID=$id');
               

                while ( $b = mysqli_fetch_array ( $a ) )
                
                    {
    ?>
            <div class='gallery__item icon-expand'>
              <img src='<?php echo $vari; ?>' alt='<?php echo $alt; ?>'width='640px'
                height='220px' class='gallery__img'>

            </div>
    <?php
    }
    ?>
            <div class='gallery-lightbox'>
                <div class='gallery-lightbox__modal'>
                    <span class='gallery-lightbox__control icon-close'></span>
                    <span class='gallery-lightbox__control icon-back'></span>
                    <span class='gallery-lightbox__control icon-next'></span>
                    <img src='img/img-1.jpg' class='gallery-lightbox__img'>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src='desing/js/app.js'></script>
    <script src='../js/lightbox-plus-jquery.min.js'> </script>		
    <script src='../js/bootstrap.js'></script>
  
</body>
</html>

	

	");
header ("location: https://ttgv.000webhostapp.com/destino/admi_des.php");
 //echo "yes";

}
else{
    //echo "no";
    header ("location: ../login_fail.php");
}






//pa



?>