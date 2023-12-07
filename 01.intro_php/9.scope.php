<?php
/**
 * El alcance de una variable en PHP se limita a dos: locales y globales.
 * Alcance global: La variable puede ser usada en cualquier parte del codigo.
 * Alcance local: La variable sólo puede usarse dentro del bloque definido.
 * Las funciones no pueden acceder a las variables fuera de ella.
 * No podemos acceder a las variables dentro de una funcion.
 */

$devilNum = 66.6;

function showNumBad(){
    echo $devilNum; // Undefined. El scope de la variable no incluye "dentro" de la funcion
}

function showNumGood($goodNum){
    echo $goodNum; // 66.6
}

// showNumBad(); // error: Undefined Variable

showNumGood($devilNum); // 66.6
echo '<br/>';

// echo $goodNum; // error: Undefined Variable

?>