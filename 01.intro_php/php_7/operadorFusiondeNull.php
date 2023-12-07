<?php
/**
 * Operador de Fusion de Null - (??).
 * En versiones anteriores de PHP, si queríamos asignar el valor de una variable a otra, lo normal era corroborar primero si la variable estaba "seteada", por lo que el código (con un ternario/elvis) quedaba más o menos de la siguiente forma:
 * $varNueva = isset($varOriginal) ? $varOriginal : //valor si '$varOriginal' no está seteada;
 * 
 * Este operador permite saltarnos el paso de verificar si la variable está seteada, evaluando automaticamente este estado y asignando el valor en caso de que lo esté, o el valor indicado en caso de que no.
 * 
 */

// Ejemplo:
// suponiendo que la variable 'nombre' se recibe desde la URL:

# Codigo en PHP 5.6
$name = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';
echo 'PHP < 7.0: ' . $name . '<br/>';

# Código en PHP 7.0+
$name = $_GET['nombre'] ?? 'Anonimo';
echo 'PHP 7.0+: ' . $name . '<br/>';
 
?>