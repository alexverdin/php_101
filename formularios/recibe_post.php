<?php
/**
 * Este archivo recibe los datos que envia un formulario por medio del metodo POST.
 * Este método almacena la información recibida en un arreglo ASOCIATIVO con un elemento por cada input enviado, de la forma: [input_1 [name] => input_1 value, ...] en la variable $_POST
 * La destructuracion de arrays se implementa a partir de PHP 7.1, por lo que no se incluye en estas notas.
 *
 */

// print_r($_POST); // muestra todo el contenido de la variable $_POST

if(!$_POST){ // si la variable NO tiene contenido, redirecciona al index.php
    header('Location: ./index.php');
}

$name = htmlspecialchars($_POST['nombre']);
$gender = htmlspecialchars($_POST['gender']);
$year = htmlspecialchars($_POST['year']);
$terms = htmlspecialchars($_POST['terminos']);

echo '<h3>Tus respuestas POST fueron: </h3>';
echo $name . '<br/>';
echo $gender . '<br/>';
echo $year . '<br/>';
echo $terms . '<br/>';
