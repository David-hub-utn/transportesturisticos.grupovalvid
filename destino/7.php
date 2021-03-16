
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
      
         <h1 style='color:#C0F1F8; font-size: 22px; text-align: center;'><br><?php echo 'Santuario del señor de Chalma'; ?></h1>
        <BR>
        
         <h2 style='color:#E7EEF1; text-align: justify;margin-left: 150px; margin-right: 150px; font-size: 20px;'>


<?php echo 'Chalma es un poblado de México, ubicado en el estado de México, es conocido como un centro de peregrinaje religioso hacia su santuario, donde se venera al Señor de Chalma.
Las peregrinaciones tienen lugar principalmente en trece fiestas a lo largo del año, las más importantes de las cuales son el 6 de enero día de la Epifanía, Miércoles de Ceniza, primer viernes de Cuaresma, Semana Santa, Pentecostés, el 1 de julio día del Señor de Chalma, el 28 de agosto día de San Agustín, el 29 de septiembre día de San Miguel Arcángel y en Navidad. Las principales actividades religiosas que se llevan a cabo durante ellas son la peregrinación a pie y posteriormente una serie de danzas tradicionales ofrecidas al Señor de Chalma, siendo estas últimas lo más conocido de la población.'; ?>
</h2>
<br><br><br>
    <div class='root'>
        <div class='gallery'>
            <?php
             include 'conn.php';
	$queryS = mysqli_query($conn,'SELECT * FROM imagenes where img_des_ID=7');
               

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

	