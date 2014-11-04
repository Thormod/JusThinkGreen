<?php
/* Set e-mail recipient */
$mensaje = $_POST['mensaje'];
$mensaje.="\n----------\n";
$mensaje.="\nDe: ".$_POST['nombre'];
$mensaje.="\nE-Mail: ".$_POST['email'];
$destino = "justhinkgreen.info@gmail.com";
$remitente = $_POST['email'];
$asunto = "Mensaje enviado por: ".$_POST['nombre'];
mail($destino, $asunto, $mensaje,"FROM: $remitente");
echo "Mensaje enviado. Gracias por contactarse";
?>