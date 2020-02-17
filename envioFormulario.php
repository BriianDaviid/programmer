<?php

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje_usuario = $_POST["mensaje"];



$destino = "bryandavidvidal@gmail.com";

$asunto = "Consulta enviada desde www.fullstackdavid.com";

$mensaje = "Nombre: " . $nombre . "\r\n";
$mensaje .= "E-mail: " . $email . "\r\n";
$mensaje .= "Mensaje: " . $mensaje_usuario . "\r\n";

$remitente = "DE: algo@gmail.com";

mail($destino, $asunto, $mensaje, $remitente);


header("Location:index.php?i=ok");




