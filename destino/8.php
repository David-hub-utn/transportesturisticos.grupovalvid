
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Galería con lightbox</title>
    <link rel='stylesheet' href='desing/css/icons.css'>
    <link rel='stylesheet' href='desing/css/app.css'>
</head>
<body style=' background-color:#3D5D61;'>
    
  		<a href='https://ttgvalvid.000webhostapp.com/gallery' style='color:#20F10C';>Regresar a Destinos y Turismo</a>
      
         <h1 style='color:#C0F1F8; font-size: 22px; text-align: center;'><br><?php echo 'Tirolesa-Valle de Bravo'; ?></h1>
        <BR>
        
         <h2 style='color:#E7EEF1; text-align: justify;margin-left: 150px; margin-right: 150px; font-size: 20px;'>


<?php echo 'Una de las actividades más divertidas de Rodavento. Desplázate entre las copas de los árboles a más de 40 metros de altura. Disfruta de la sensación de adrenalina y del contacto directo con la naturaleza. Atrévete a vencer tus miedos y descubrir nuevas sensaciones! La tirolesa cuenta con 5 plataformas con 6 cables de aproximadamente 500 metros de longitud y su recorrido te tomará aproximadamente media hora. 

Rodavento, por su seguridad y entorno natural representa la mejor opción para realizar la actividad de tirolesa en Valle de Bravo.'; ?>
</h2>
<br><br><br>
    <div class='root'>
        <div class='gallery'>
            <?php
             include 'conn.php';
	$queryS = mysqli_query($conn,'SELECT * FROM imagenes where img_des_ID=8');
               

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
    <script src='desing/js/app.js'></script>
</body>
</html>

	