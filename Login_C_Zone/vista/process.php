<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php/Exception.php';
require 'php/PHPMailer.php';
require 'php/SMTP.php';

$destino = "appczone2020@gmail.com";
$nombre = $_POST["fullname"];
$celular = $_POST["phone"];
$domicilio = $_POST["addres"];
$tipo = $_POST["kind"];
$email = $_POST["email"];
$mensaje = $_POST["msg"];
$contenido = "Nombre: " . $nombre . "\nCelular: " . $celular . "\nDomicilio: " . $domicilio . "\nTipo: " . $tipo . "\nEmail:" . $email . "\nMensaje:" . $mensaje;

mail($destino,"Usuario",$contenido);

print "<script>alert(\"Mensaje enviado exitosamente.\");</script>";
echo 'Mensaje enviado correctamente';

header("Location: usuario.php");
exit;

?>
