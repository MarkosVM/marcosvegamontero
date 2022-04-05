<?php
//direccion de correo a la que le llegaran los datos del formulario web
$Destino = "info@marcosvegamontero.com";

$Nombre = $_POST["nombre"];
$Apellido = $_POST["apellido"];
$Correo = $_POST["email"];
$Telefono = $_POST["telefono"];
$Asunto = $_POST["mensaje"]; 

$textoEmisor = "MIME-VERSION: 1.0\n";
$textoEmisor .= "Content-type: text/html; charset=UTF-8\n";
$textoEmisor .= "From: $Correo";

$Contenido ="Hemos recibido un correo de:\n\n" . $Nombre . " " . $Apellido . "\n\nCorreo Electronico: " . $Correo . "\n\nTeléfono: " . $Telefono . "\n\nMensaje: " . $Asunto;

//funcion encargada para enviar correos por smpt, el parametro "Contacto" no es obligatorio, es solo para que se vea que es un contacto nuevo.

mail($Destino, "Nuevo Cliente -> MVM Software Develper", $Contenido, $textoEmisor);

//redireccionar al formulario web una vez enviado el correo
header("Location:index.html");
?>