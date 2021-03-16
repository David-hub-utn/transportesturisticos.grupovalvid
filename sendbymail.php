<?php
header('Location: /formulario1.html');

	if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "davidsanchezrojas996@gmail.com";
$email_subject = "Cotisacion desde el sitio web";

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
$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
$email_message .= "Correo: " . $_POST['email'] . "\n";
$email_message .= "Telefono: " . $_POST['tel'] . "\n";
$email_message .= "Origen: " . $_POST['origen'] . "\n";
$email_message .= "Destino: " . $_POST['destino'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>

