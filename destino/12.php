

<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
                <?php
             include 'conn.php';
	$querySS = mysqli_query($conn,'SELECT * FROM destinos_table where des_ID=12');
               

                while ( $rowS = mysqli_fetch_array ( $querySS ) )
                
                    {
    ?>
    <title><?php echo $rowS['des_NAME'];; ?></title>
    <link rel='stylesheet' href='desing/css/icons.css'>
    <link rel='stylesheet' href='desing/css/app.css'>

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
         <h1 style='color:#EB5273; font-size: 30px font-family:'Barlow Condensed', sans-serif text-align: center;'><br>		<div class='mt-5 row d-flex align-items-center justify-content-center'><?php echo $rowS['des_NAME'];; ?></div> <br></h1><a href='#galeria' class='scroll'>Fotos</a>  </div>  
        <BR>
    <div style='margin-left: 20px; margin-right: 20px;'>
         <p style='color:black; text-align: justify; margin-left: 20px; margin-right: 20px; font-size: 18px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;line-height:24px;'>


<?php echo $rowS['des_DESCRIPTION'];; ?>
</p></div>
    <?php
    }
    ?>
<div id='galeria'>
    <div class='root' align='center'>
        <div class='gallery' align='center'>
            <?php
             include 'conn.php';
	$queryS = mysqli_query($conn,'SELECT * FROM imagenes where img_des_ID=12');
               

                while ( $row = mysqli_fetch_array ( $queryS ) )
                
                    {
    ?>
            <div class='gallery__item icon-expand'>
              <img src='<?php echo $row['img_NAME'];; ?>' alt='<?php echo $row['img_TEXT'];; ?>'width='640px'
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

	

	