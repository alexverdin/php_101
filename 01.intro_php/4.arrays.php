<?php

/**
 * En PHP los arreglos se pueden declarar mediante la función array() o usando la sintaxis abreviada '[]';
 * Existen dos tipos de arreglos: indexados y asociativos.
 * Podemos almacenar elementos con o sin identificador en un arreglo, pero no se recomienda.
 * Podemos almacenar arreglos asociativos dentro de arreglos indexados.
 */

 # Arreglo Indexado (acceso a los datos mendiante el indice de cada elemento)
$week = array('sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
echo 'Day 03: ' . $week[2] . '<br/>'; // tuesday


# Arreglo Asociativo (acceso a los datos mediante un identificador [similar a un objeto]);
$usuario = ['name' => 'Alex', 'username' => 'alex_user', 'mail' => 'alex@mail.com'];

echo $usuario['name'] . '<br/>'; // accedemos a los datos mediante el identificador.
echo $usuario['username'] . '<br/>';
echo $usuario['mail'] . '<br/>';

$usuario['mail'] = 'newmail@mail.com';
echo 'new mail: ' . $usuario['mail'] . '<br/>';

# Arreglos Multidimensionales
$players = [
    ['player 1', 'lifepoints' => 18, 'status' => 'normal'],
    ['player 2', 'lifepoints' => 14, 'status' => 'stunned'],
    ['player 3', 'lifepoints' => 16, 'status' => 'frozen']
];

$lifePlayer1 = $players[0]['lifepoints']; // 18
$statusPlayer3 = $players[2]['status']; // 'frozen'
$statusPlayer2 = $players[0]['status']; // 18
echo '<br/>';
echo 'Life ' . $players[0][0] . ': ' . $lifePlayer1 . '<br/>';
echo 'Status ' . $players[1][0] . ': ' . $statusPlayer3 . '<br/>';
echo 'Status ' . $players[2][0] . ': ' . $statusPlayer2 . '<br/>';

?>