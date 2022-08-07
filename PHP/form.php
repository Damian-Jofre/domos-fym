<?php

$nombre = $_POST["nombre"];
$tel = $_POST["tel"];
$mail = $_POST["mail"]
$mensaje = $_POST["mensaje"]

/* Como me va a llegar el mensaje */
$mensaje = "Este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje .= "Su teléfono es": . $tel . ",\r\n";
$mensaje .= "Se mail es:" . $mail . ",\r\n"; 
$mensaje .= "Mensaje:" . $mensaje . $_POST["mensaje"] .  ",\r\n";
$mensaje .= "Enviado el" . date("d/m/Y", time());

$destinatario = "dajar80@gmail.com";
$asunto = "Este mail fue enviado desde Domos Fym"

/* A quien le mando el mail */
mail($destinatario, $asunto, utf8_decode($mensaje), $header);
/* Redirección al tocar enviar */
header("Location:enviado.html");

