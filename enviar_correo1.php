<?php

error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Mailer/Exception.php';
require 'Mailer/PHPMailer.php';
require 'Mailer/SMTP.php';
//Aquí recibiré los datos del formulario
	if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['first_name']) ||
!isset($_POST['email']) ||
!isset($_POST['tel']) ||
!isset($_POST['origen']) ||
!isset($_POST['destino'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de cotización: <br>";
$email_message .= "Nombre: " . $_POST['first_name'] . "<br>";
$email_message .= "E-mail: " . $_POST['email'] . "<br>";
$email_message .= "Telefono: " . $_POST['tel'] . "<br>";
$email_message .= "Origen: " . $_POST['origen'] . "<br>";
$email_message .= "Destino: " . $_POST['destino'] . "<br>";


$quien_envia = $_POST['first_name'];
//$quien_envia .= " ".$_POST['last_name'];


//echo "¡El formulario se ha enviado con éxito!";
}
//Aquí se acaba la recepción de datos


$mail = new PHPMailer(true);

try {
                    // Enable verbose debug output
    //$mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'davidsanchezrojas996@gmail.com';                  // SMTP username
    $mail->Password   = 'yameacorde';                              // SMTP password
    $mail->SMTPSecure = 'tls';        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('davidsanchezrojas996@gmail.com', 'Transportes VALVID');
    //$mail->addAddress('davidsanchezrojas996@gmail.com');
    $mail->addAddress('davidsanchezrojas996@gmail.com');     // Add a recipient
 

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $quien_envia;
    $mail->Body    = $email_message;
    $mail->CharSet = 'UTF-8';
  

    $mail->send();
   header ('location: https://ttgvalvid.000webhostapp.com/index'); 
    //echo 'El mensaje ha sido enviado';


 


} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




?>