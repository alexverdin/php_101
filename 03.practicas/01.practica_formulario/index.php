<?php

$errors = '';
$sended = '';

if(isset($_POST['submit-form'])){ // Boton 'name="submit-form" ' presionado
   $name = $_POST['name'];
   $mail = $_POST['mail'];
   $msg = $_POST['message'];

   // Validacion del campo nombre
   if(!empty($name)){
    $name = trim($name);
    $name = filter_var($name, FILTER_SANITIZE_STRING);
   }else{
    $errors .= 'Por favor, ingresa un nombre. <br/>';
   }

   // Validacion del campo email
   if(!empty($mail)){
    $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
    $mail = trim($mail);
    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $errors .= 'Por favor, ingresar un correo válido. <br/>';
    }
   }else{
    $errors .= 'Por favor, ingresa un correo. <br/>';
   }

   // Validacion del campo Mensaje
   if(!empty($msg)){
    $msg = htmlspecialchars($msg);
    $msg = trim($msg);
    $msg = stripslashes($msg);
   }else{
    $errors.= 'Por favor, escribe un mensaje. <br/>';
   }

   if(!$errors){
    $send_to = 'destino@mail.com';
    $subject = 'Mail send from: miformulario.com';
    $full_msg = "From: $name \n";
    $full_msg = "Mail: $mail \n";
    $full_msg = "Message: " . $msg;

    $sended = true;
    // mail($send_to, $subject, $full_msg); // Envío de correo, requiere estar en un hosting para funcionar
   }
}

require './index.view.php';

