<?php

    // LLamado a los campos
    $nombre = $_POST['name'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];


    $to = 'erick@punto401.com';
    $subject = 'Correo del sitio web punto401.com';
    $body = "";

    $body .= "De: ".$nombre."\r\n";
    $body .= "Correo: ".$email."\r\n";
    $body .= "Mensaje: ".$mensaje."\r\n";


    //Enviando mensaje
    mail($to, $subject, $body);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    header('refresh:3; url=https://punto401.com/'); 
    
?>