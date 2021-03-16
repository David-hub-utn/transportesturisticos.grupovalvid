
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link href="../images/favicon.ico" rel="icon" type="image/x-icon">
    <?php
$tablet_browser = 0;
$mobile_browser = 0;

if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
}

if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}

if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}

$mobile_ua     = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ', 'acs-', 'alav', 'alca', 'amoi', 'audi', 'avan', 'benq', 'bird', 'blac',
    'blaz', 'brew', 'cell', 'cldc', 'cmd-', 'dang', 'doco', 'eric', 'hipt', 'inno',
    'ipaq', 'java', 'jigs', 'kddi', 'keji', 'leno', 'lg-c', 'lg-d', 'lg-g', 'lge-',
    'maui', 'maxo', 'midp', 'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-',
    'newt', 'noki', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox',
    'qwap', 'sage', 'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar',
    'sie-', 'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-',
    'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'wapp',
    'wapr', 'webc', 'winw', 'winw', 'xda ', 'xda-');

if (in_array($mobile_ua, $mobile_agents)) {
    $mobile_browser++;
}

if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA']) ? $_SERVER['HTTP_X_OPERAMINI_PHONE_UA'] : (isset($_SERVER['HTTP_DEVICE_STOCK_UA']) ? $_SERVER['HTTP_DEVICE_STOCK_UA'] : ''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
        $tablet_browser++;
    }
}

if ($tablet_browser > 0) {?>
<link rel='stylesheet' href='desing/css/app2.css'>
<?php } else if ($mobile_browser > 0) {?>
<link rel='stylesheet' href='desing/css/app.css'>
<?php } else {?>
<link rel='stylesheet' href='desing/css/app2.css'>
<?php }

?>
                <?php
include 'conn.php';
$querySS = mysqli_query($conn, 'SELECT * FROM destinos_table where des_ID=2');

while ($rowS = mysqli_fetch_array($querySS)) {
    ?>
    <title><?php echo $rowS['des_NAME']; ?></title>
    <link rel='stylesheet' href='desing/css/icons.css'>

   <!-- <link rel='stylesheet' href='desing/css/app.css'>-->

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
         <h1 style='color:#EB5273; font-size: 30px font-family:'Barlow Condensed', sans-serif text-align: center;'><br>     <div class='mt-5 row d-flex align-items-center justify-content-center'><?php echo $rowS['des_NAME']; ?></div> <br></h1><a href='#galeria' class='scroll'>Fotos</a>  </div>
        <BR>
    <div style='margin-left: 20px; margin-right: 20px;'>
         <p style='color:black; text-align: justify; margin-left: 20px; margin-right: 20px; font-size: 18px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;line-height:24px;'>


<?php echo $rowS['des_DESCRIPTION']; ?>
</p></div>
    <?php
}
?>
<div id='galeria'>
    <div class='root' align='center'>
        <div class='gallery' align='center'>
            <?php
include 'conn.php';
$queryS = mysqli_query($conn, 'SELECT * FROM imagenes where img_des_ID=2');

while ($row = mysqli_fetch_array($queryS)) {
    ?>
            <div class='gallery__item icon-expand'>
              <img src='<?php echo $row['img_NAME']; ?>' alt='<?php echo $row['img_TEXT']; ?>'width='640px'
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

