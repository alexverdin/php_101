<?php
/**
 * Las condicionales en PHP trabajan del mismo modo que en otros lenguajes y la sintaxis es prácticamente la misma.
 * if( //condicion ){}
 * else{}
 * elseif(){}
 * switch-case(){ ..., break;}
 * [condicion] ? [valor si true] : [valor si false] ; // ternario
 * 
 * Los operadores lógicos son iguales que los otros lenguajes: (==, !=, <>, <, >, <=, >=, !)
 * Los operadores relacionales cambian ligeramente:
 * Operador AND [&&]: Ambas condiciones deben ser TRUE para que el resultado sea TRUE.
 * Operador OR [||, OR]: Si una o ambas condiciones son TRUE, el resultado es TRUE.
 * Operador XOR [XOR]: Una y SOLO una de las condiciones debe ser TRUE para que el resultado sea TRUE.
 * 
 */

$holiday = 'xmas';

# version if-else
if($holiday == 'xmas'){
    echo '<h2>Merry Xmas!!!</h2>';
} else {
    echo '<h2>No es navidad</h2>';
}

# version ternario
echo ($holiday == 'halloween') ? '<h2>Happy Halloween!!!</h2>' : '<h2>Faltan 313 días para halloween.</h2>';

?>