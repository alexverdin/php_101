<?php
/**
 * Las funciones en PHP son muy similares a las funciones de JS, se declaran con la palabra reservada 'function' + el nombre de la función.
 * No es necesario terminar con ';' despues de la llave de cierre de la funcion.
 * return; // Devuelve el valor especificado fuera de la funcion.
 */

function saludo($name){
    return 'Hola, ' . $name;
}

function suma($numA, $numB){
    return $numA + $numB;
}

echo saludo('Alex') . '<br/>';
echo 'La suma de 13+4 es: ' . suma(13,4) . '<br/>';

# Area de un triangulo
function areaTriangulo($base, $h){
    return ($base * $h) / 2;
}

echo 'El area del triangulo es: ' . areaTriangulo(6, 10) . '<br/>';

?>