<?php
/**
 * Desde PHP 7, si tu documento es 100% PHP, no se recomienda usar la etiqueta de cierre para evitar secuencias de escape no deseadas.
 * Las declaraciones escalares permiten evitar que los usuarios inserten datos de un tipo no-deseado en las variables que definimos (basicamente convierte a PHP en un lenguaje de tipado fuerte)
 * declare(strict_types=1); // Obliga a que la asignacion del valor a una variable sea del tipo escalar especificado, sin tratar de convertirla.
 * 
 * Tipos escalares:
 * int
 * float
 * String
 * bool
 * array
 */
declare(strict_types=1);

 function square(int $num){ // declaracion de tipo escalar
    return $num * $num;
 }

 //$value = 'Alex'; // Uncaught TypeError
 //$value = '8'; // Válido, siempre que strict_types no esté activo.
$value = 6;
 echo 'El cuadrado de ' . $value . ' es: ' . square($value) . '<br/>';