<?php
/**
 * Las declaraciones de tipo devolucion son similares a las declaraciones de tipo escalar, pero establecen el tipo del valor de retorno de una funcion.
 * Se declaran con ':' después de los paentesis de una función.
 * function nombreFuncion([declaracion-escalar] parametro) : [declaracion Devolucion]{}
 * 
 * Tipos escalares:
 * int
 * float
 * String
 * bool
 * array
 */
declare(strict_types=1);

$persona = ['name' => 'Alex', 'edad' => 34, 'nickname' => 'Aelfric'];

function getAge(array $age) : int{ // declaracion devolucion : int
    return $age['edad']; // return correcto
}

/*
function getNick(array $age) : int{
    return $age['nickname']; // Uncaught TypeError: Return. Se esperaba retornar un INT
}
*/

echo 'La edad de ' . $persona['name'] . ' es: ' . getAge($persona) . '<br/>';
// echo 'La edad de ' . $persona['name'] . ' es: ' . getNick($persona) . '<br/>';