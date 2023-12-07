<?php
/**
 * Ooperador Spaceship:
 * <=> - Compara expresiones y retorna "-1" si la primera expresion es Menor que la segunda, "0" si ambas expresiones son iguales y "1" si la primera expresion es Mayor a la segunda.
 * 
 * implode($ARRAY); // alias de la funcion join(), retorna una cadena de texto con el contenido de un array
 * explode($STRING); // Divide una cadena de texto a un Array, usando el caracter declarado como separador.
 * usort($ARRAY, 'NOMBRE_FUNCION'); // Ordena los elementos de un array por valores de una FUNCION de comparacion definida por el usuario.
 * 
 */
$arr = [1, 9, -4, 16, 3];

# Operador Spaceship
echo 10 <=> 1; // 1
echo '<br/>';
echo 10 <=> 10; // 0
echo '<br/>';
echo 1 <=> 10; // -1
echo '<br/>';

# implode()
echo implode(', ', $arr) . '<br/>'; // 1, 9, -4, 16, 3
function comparar($a, $b){
    return $a <=> $b;
}

# usort()
usort($arr, 'comparar');
echo implode(', ', $arr) . '<br/>'; // -4, 1, 3, 9, 16