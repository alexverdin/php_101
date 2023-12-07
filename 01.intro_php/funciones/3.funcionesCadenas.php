<?php
/**
 * PHP tiene funciónes muy útiles para procesar cadenas de texto, estos son algunos ejemplos.
 * htmlspecialchars(); // Convierte caracteres especiales en elementos HTML (util para evitar inyecciones de codigo, protege SOLO contra inyecciones HTML).
 * trim(); // Elimina los espacios en blanco al inicio y al final de una cadena.
 * strlen(); // Devuelve el tamaño de una cadena de texto.
 * substr($TEXTO, valor-inicio-del-"corte", cantidad-de-caracteres-a-mostrar); // Devuelve una subcadena iniciando desde el indice del segundo parametro y mostrando la cantidad de caracteres del 3er parametro.
 * strtoupper(); // convierte la cadena de texto a mayusculas.
 * strtolower(); // convierte la cadena de texto a minusculas.
 * strpos($TEXTO, 'caracter a buscar'); // Devuelve la primera POSICION del caracter especificado (el conteo comienza en 0).
 * get_defined_vars(); // Retorna un arreglo multidimensional con TODAS las variables definidas.
 * array_keys(); // Retorna un arreglo con todas las Keys de un array.
 */

$texto = 'Hola, Alex';
$playerOne = ['PlayerMe', 'lifepoints' => 18, 'status' => 'normal'];

function danger($name){ // funcion sin proteccion contra inyeccion de codigo HTML
    return 'Hola, ' . $name;
}

# htmlspecialchars()
function safe($name){
    return 'Hola, ' . htmlspecialchars($name); // proteccion contra inyeccion HTML
}

# get_defined_vars()
echo danger(print_r(get_defined_vars())). '<br/>'; // Array con todas las variables en PHP

# array_keys()
echo '<br/>';
echo print_r(array_keys($playerOne)) . '<br/>'; // Array ( [0] => 0 [1] => lifepoints [2] => status )

# funciones Varias
echo '<br/>';
echo danger('<b>Alex</b>') . '<br/>'; // Hola, Alex (Alex en negritas) *PELIGROSO*
echo safe('<b>Alex</b>') . '<br/>'; // <b>Alex</b>
echo trim('   Holi         ') . '<br/>'; // Holi (sin espacios)
echo strlen($texto) . '<br/>'; // 10
echo substr($texto, 6, 4) . '<br/>'; // Alex
echo strtolower($texto) . '<br/>'; // hola, alex
echo strtoupper($texto) . '<br/>'; // HOLA, ALEX
echo strpos($texto, 'A') . '<br/>'; // 6

?>

