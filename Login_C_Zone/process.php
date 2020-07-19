<?php

include "partials/autoload.php";
include "partials/TeamData.php";
include "partials/PersonData.php";


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
Core::redir("./usuario.php");
header("Status: 301 Moved Permanently");
header("Location: usuario.php");
exit;
?>
