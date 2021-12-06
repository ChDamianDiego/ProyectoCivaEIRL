<?php
// Lamando los campos
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

//destinatario
    $destinatario = "dchuctaya@autonoma.edu.pe";
    $asunto = "Formulario Civa EIRL";

    $carta = "De: $name \n";    
    $carta .= "Correo: $email \n";
    $carta .= "Teléfono: $phone\n";
    $carta .= "Mensaje: $message";

//Enviando Mensaje
    mail($destinatario, $asunto, $carta);
    header('Location:success.html');
?>