<?php
$destino= "ismaelalejandro18@gmail.com"; 
$nombre = $_POST["Nombre"];
$correo = $_POST["Correo"];
$mensaje = $_POST["Mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo  . "\nMensaje: " . $mensaje; mail($destino,"Contacto", $contenido); 
header ("Location:gracias.html"); 
?>