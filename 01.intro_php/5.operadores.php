<?php
/**
 * Los operadores en PHP son prácticamente los mismos que en otros lenguajes:
 * 
 * ASIGNACION: (=, +=, -=, *=, /=)
 * COMPARACION: (==, ===, != <>, !==, >, <, >=, <=)
 * LOGICOS: (and &&, or ||, xor, ! )
 * INCREMENTO / DECREMENTO: (++, --)
 * CONCATENACION: (., .=)
 * 
 * PHP 7.0+:
 * COMPARACION:
 * <=> - Compara expresiones y retorna "-1" si la primera expresion es Menor que la segunda, "0" si ambas expresiones son iguales y "1" si la primera expresion es Mayor a la segunda.
 * 
 */

$num = 10;
$num *= 3; // 30 ($num = $num * 3)

$texto = 'Cadena uno,' . ' Cadena dos, ';
$texto .= 'Cadena tres.'; // Concatena la cadena al contenido de la variable.
echo $texto;

echo '<br/>';
echo $num++ . '<br/>'; // 30 (se ejecuta primero el echo y luego la asignacion)
echo ++$num . '<br/>'; // 32 (se ejecuta primero la asignacion y luego el echo)

 ?>