<?php
/**
 * Hay dos maneras generales para corroborar que un formulario fue enviado:
 * 1. Usando la variable $_SERVER (recomendado)
 * 2. Revisando el 'name' del submit en la variable $_POST / $_GET
 */

 # Usando la variable $_SERVER
 // Corroboramos el metodo usado para enviar el formulario, pero desconocemos desde qué formulario nos enviaron la información.
echo 'Uso de la variable <b>$_SERVER</b> <br/>';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo "Datos enviados por el metodo: <b>GET</b>";
} else {
    echo "Datos enviados por el metodo: <b>POST</b>";
}

echo '<br/>';
echo '<br/>';

# Revisando el nombre del submit en la variable $_POST / $_GET
// Podemos corroborar el 'name' del formulario desde el que se envió la información.
echo 'Uso de la variable <b>$_POST / $_GET</b> <br/>';
if(isset($_POST['submit-form_post'])){
    echo 'Datos enviados correctamente desde <b>form_valida_post</b> <br/>';
} elseif(isset($_GET['submit-form_get'])){
    echo 'Datos enviados correctamente desde <b>form_valida_get</b> <br/>';
} else {
    echo 'Error al recuperar nombre del formulario. <br/>';
}