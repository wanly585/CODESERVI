<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $destinatario = "wamllypareggy@gmail.com"; // <-- Cambia por tu correo
    $asunto = "Nuevo mensaje de tu página web";
    $cuerpo = "Nombre: $nombre\nCorreo: $correo\n\nMensaje:\n$mensaje";

    $headers = "From: $correo";

    if(mail($destinatario, $asunto, $cuerpo, $headers)){
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
