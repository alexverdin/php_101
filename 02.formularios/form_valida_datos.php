<?php
/**
 * Comenzamos con el uso de funciones de saneamiento.
 * filter_var($cadena-a-sanear, FILTER_algo_valor);
 */
//Evitamos hacer validaciones al abrir la pagina por primera vez.
if(isset($_POST['submit-form-valida-datos'])){ // El usuario hizo clic en el submit.
    $name = $_POST['nombre'];
    $mail = $_POST['email'];
    $errores = '';

    if(!empty($name)){
        $name = filter_var($name, FILTER_SANITIZE_STRING); // Eliminamos posibles eqtiquetas HTML
        $name = trim($name); // Eliminamos los espacios al principio y al final del texto
        $name = stripslashes($name); // quitamos las diagonales invertidas (proteccion contra secuencias de escape)
        echo 'Name: ' . $name . '<br/>';
    }else{
        $errores .= 'Por favor, agrega un nombre.<br/>';
    }

    if(!empty($mail)){
        $mail = filter_var($mail, FILTER_SANITIZE_MAIL);
        $mail = trim($mail);
        $mail = stripslashes($mail);
        echo 'e-Mail: ' . $mail . '<br/>';
    }else{
        $errores .= 'Por favor, ingresa un correo.<br/>';
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Validar POST</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form action="<?php echo filter_var($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" placeholder="Your Name" name="nombre" id="nombre">
        <input type="email" placeholder="Your e-mail" name="email" id="email">

        <!-- Muestra errores si los hubiera -->
        <?php if(!empty($errores)): ?>
            <div class="error"><?php echo $errores; ?></div>
        <?php endif; ?>

        <input type="submit" value="Enviar" name="submit-form-valida-datos">
    </form>
</body>
</html>