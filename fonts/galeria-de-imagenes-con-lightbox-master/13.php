
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Galería con lightbox</title>
    <link rel='stylesheet' href='css/icons.css'>
    <link rel='stylesheet' href='css/app.css'>
</head>
<body style=' background-color:#3D5D61;'>
    
  		<a href='http://localhost/20190405/album.php' style='color:#20F10C';>Regresar a Destinos y Turismo</a>
      
     <h1 style='color:#C0F1F8; font-size: 22px; text-align: center;'><br><?php echo 'Castillo de Chapultepec'; ?></h1>
        <BR>
        
         <h2 style='color:#E7EEF1; text-align: justify;margin-left: 150px; margin-right: 150px; font-size: 20px;'>


<?php echo 'El Castillo de Chapultepec es una construcción palaciega en el centro del Bosque de Chapultepec situado en la Ciudad de México, a una elevación de 2325 metros sobre el nivel del mar. Fue construido por el virrey Bernardo de Gálvez y Madrid sobre el cerro del Chapulín (Chapultepec es palabra de origen náhuatl «Chapulli, saltamontes, y tepe(tl), cerro, Chapultepetl», que significa "cerro del saltamontes" o "cerro del chapulín").'; ?>
</h2>
<br><br><br>
    <div class='root'>
        <div class='gallery'>
            <?php
             include 'conn.php';
	$queryS = mysqli_query($conn,'SELECT * FROM imagenes where img_des_ID=13');
               

                while ( $row = mysqli_fetch_array ( $queryS ) )
                
                    {
    ?>
            <div class='gallery__item icon-expand'>
                <img src='<?php echo $row['img_NAME']; ?>' alt='<?php echo $row['img_TEXT']; ?>' width='300' height='240' class='gallery__img'>
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
    <script src='js/app.js'></script>
</body>
</html>

	