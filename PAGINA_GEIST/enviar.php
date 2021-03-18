<?php 

// Llamado a los campos de formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "info@geistpsicologia.com";
$asunto = "Contacto desde la web";

$carta = "Nombre: $nombre \n";
$carta .= "Apellido: $apellido \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mail: $email \n";
$carta .= "Mensaje: $mensaje";


// Enviando el mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje.html');
?>