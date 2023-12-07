<?php
/**
 * Este archivo recibe los datos que envia un formulario por medio del metodo GET.
 * Este método lee la información desde la URL, lo cual tiene diversas ventajas pero también desventajas importantes.
 * Es un método que está "a la vista" del usuario, por lo que puede conllevar a riesgos de seguridad.
 * Este método almacena la información recibida en un arreglo ASOCIATIVO con un elemento por cada input enviado, de la forma: [input_1 [name] => input_1 value, ...] en la variable $_GET
 * Por cuestiones de seguridad se recomienda proteger la entrada de informaci
 */

//print_r($_GET); // muestra todo el contenido de la variable $_GET

if(!$_GET){ // si la variable NO tiene contenido, redirecciona al index.php
    header('Location: ./index.php');
}

$name = htmlspecialchars($_GET['nombre']);
$gender = htmlspecialchars($_GET['gender']);
$year = htmlspecialchars($_GET['year']);
$terms = htmlspecialchars($_GET['terminos']);

echo '<h3>Tus respuestas GET fueron: </h3>';
echo $name . '<br/>';
echo $gender . '<br/>';
echo $year . '<br/>';
echo $terms . '<br/>';
