<?php
/**
 * Similar a otros lenguajes, PHP maneja funciones matemáticas que nos facilitan el manejo de valores numéricos.
 * round(valor, cant-decimales); // Redondea un valor numérico la cantidad de decimales indicada, si no se especifican decimales, redondea al entero más próximo.
 * ceil(); // redondea un numero hacia arriba, sin importar el valor decimal.
 * getrandmax(); // Muestra el valor maximo posible a generar con la funcion rand(), depende de la version de PHP.
 * mt_getrandmax(); // Muestra el valor maximo posible a generar con la funcion mt_rand(), depende de la version de PHP.
 * rand(valor-minimo, valor-maximo); // Genera un numero entero aleatorio en el rango especificado. Si no se especifica rango, retorna un valor entre 0 y 'getrandmax()'.
 * mt_rand(); // // Genera un numero entero aleatorio en el rango especificado usando "Mersenne Twister" (4 veces mas rapido que 'rand()'). Si no se especifica rango, retorna un valor entre 0 y 'mt_getrandmax()'.
 * M_PI: // Constante con el valor de PI, predefinida por PHP
 */

$num = 3.141592654;

# round()
echo 'Original value: ' . $num . '<br/>';
echo 'Round 3 dec.: ' . round($num,3) . '<br/>'; // 3.142
echo 'Round no-dec.: ' . round($num) . '<br/>'; // 3

# rand() / getrandmax()
echo 'Max <b>rand()</b> value possible: ' . getrandmax() . '<br/>';
echo 'Random: ' . rand() . '<br/>'; // Entero aleatorio entre 0 y getrandmax()
echo 'Random 10-100: ' . rand(10,100) . '<br/>'; // Entero aleatorio entre 10 y 100 (incluye ambos)

# mt_rand() / mt_getrandmax()
echo 'Max <b>mt_rand()</b> value possible: ' . mt_getrandmax() . '<br/>';
echo 'Random: ' . mt_rand() . '<br/>'; // Entero aleatorio mt entre 0 y mt_getrandmax()
echo 'Random 10-100: ' . mt_rand(10,100) . '<br/>'; // Entero aleatorio mt entre 10 y 100 (incluye ambos)

# ceil()
echo 'Ceil: ' . ceil(12.00001) . '<br/>'; // 13

# PI de PHP
echo M_PI . '<br/>';

?>