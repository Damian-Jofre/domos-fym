<?php

$nombre = $_POST["nombre"];
$tel = $_POST["tel"];
$mail = $_POST["mail"];
$mensajes = $_POST["mensaje"];

/* $header .= "Content-Type: text/plain"; */

/* Como me va a llegar el mensaje */
$mensaje = "Este mensaje fue enviado por:" . $nombre . ",\r\n";
$mensaje .= "Su teléfono es:" . $tel . ",\r\n";
$mensaje .= "Se mail es:" . $mail . ",\r\n"; 
$mensaje .= "Mensaje:" . $mensajes . $_POST["mensaje"] .  ",\r\n";
$mensaje .= "Enviado el" . date("d/m/Y", time());

$para = "dajar80@gmail.com";
$asunto = "Este mail fue enviado desde Domos Fym";

/* A quien le mando el mail */
mail($para, $asunto, utf8_decode($mensaje), $header);
/* Redirección al tocar enviar */
header("Location:../paginas/enviado.html");
