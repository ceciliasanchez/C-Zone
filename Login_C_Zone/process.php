<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php/Exception.php';
require 'php/PHPMailer.php';
require 'php/SMTP.php';

include "partials/autoload.php";
include "partials/TeamData.php";
include "partials/PersonData.php";

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = SMTP::;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'pablopicon6@gmail.com';                     // SMTP username
    $mail->Password   = 'nacional10';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('pablopicon6@gmail.com', 'Pablo Fernando');
    $mail->addAddress('pablopicon6@gmail.com', 'Joe User');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'ok';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Mensaje Enviado';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
$destino = "pfpicon@utpl.edu.ec";
$nombre = $_POST["fullname"];
$celular = $_POST["phone"];
$domicilio = $_POST["addres"];
$tipo = $_POST["kind"];
$email = $_POST["email"];
$mensaje = $_POST["msg"];
$contenido = "Nombre: " . $nombre . "\nCelular: " . $celular . "\nDomicilio: " . $domicilio . "\nTipo: " . $tipo . "\nEmail:" . $email . "\nMensaje:" . $mensaje;
mail($destino,"Usuario",$contenido);

print "<script>alert(\"Mensaje enviado exitosamente.\");</script>";
header("Location: usuario.php");
?>
