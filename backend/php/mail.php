<?php
$nombreCompleto = $_POST["nombre"];
$email = $_POST["email"];
$comentarios = $_POST["comentario"];

$to = "3131ale@gmail.com";
$subject = "Contacto WEB";
$body_Message = "Una persona quiere ponerse en contacto con usted desde el sitio web."
    . "\nNombre Completo: $nombreCompleto"
    . "\nEmail: $email"
    . "\nComentario: $comentarios";
$headers = "From: $email";

mail($to, $subject, $body_Message, $headers);
echo "<h1 Style: padding: 20px; font-size: 30px; color: blue>Gracias por su mensaje. \nEn breve nos pondremos en contacto con usted.</h1>";
?>