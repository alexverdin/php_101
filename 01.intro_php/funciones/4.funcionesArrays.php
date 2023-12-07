<?php
/**
 * PHP maneja diversas funciones que nos facilitan el manejo de los arreglos.
 * extract(); // permite la destructuracion de un array ASOCIATIVO, extrayendo los identificadores como variables y asignando a cada una el valor asignado.
 * array_pop(); // Retorna el ultimo elemento de un arreglo y lo elimina del mismo.
 * join('separador', $array); // Retorna una cadena de texto con todos los elementos de un arreglo, separados por el caracter que indiquemos.
 * array_reverse($ARRAY); // [NO DESTRUCTIVO], Retorna el orden invertido de los elementos de un arreglo.
 * count() : función para contar la cantidad de elementos en un array.
 * foreach() : función cíclica que permite ejecutar una función por cada elemento en un arreglo.
 * sort() : función que permite ordenar los elementos de un arreglo de forma ascendente en orden numérico o alfabetico.
 * rsort() : función que permite ordenar los elementos de un arreglo de forma descendente en orden numérico o alfabetico.
 */
$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

$players = [
    ['PlayerMe', 'lifepoints' => 18, 'status' => 'normal'],
    ['username' => 'Ninja', 'lifepoints' => 14, 'status' => 'stunned'],
    ['+++TheMentor+++', 'lifepoints' => 16, 'status' => 'frozen']
];

$playerOne = $players[0];

# extract()
//echo $lifepoints; // error, "Undefined Variable"
extract($playerOne);
echo 'LifePoints: ' . $lifepoints .  '<br/>'; // LifePoints:  18
echo 'Status: ' . $status .  '<br/>'; // Status: 18

#array_pop()
$lastPlayer = array_pop($players);

# join()
echo join(' ~ ', $lastPlayer) . '<br/>'; // +++TheMentor+++ ~ 16 ~ frozen

#array_reverse()
$invertedArray = array_reverse($lastPlayer);
echo join(' , ', $invertedArray) . '<br/>'; // frozen , 16 , +++TheMentor+++

# count()
$cantMeses = count($meses);

echo 'Hay :' . $cantMeses . ' meses en el año.' . '<br/>';
echo $meses[count($meses)-1] . ' es el ultimo mes del año.' . '<br/>'; // el "-1" es porque nuestros indices comienzan en 0 y nuestro contador comienza en 1.

# sort()
$mesesOrdenados = $meses;
sort($mesesOrdenados);

# rsort()
$mesesOrdenadosInv = $meses;
rsort($mesesOrdenadosInv);

?>

<!-- forEach() -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ciclos</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
        <?php
            foreach($meses as $mes){
                echo '<li>' . $mes . '</li>';
            }
        ?>
    </ul>
    <h1>Meses Ordenados</h1>
    <ul>
        <?php
            foreach($mesesOrdenados as $mes){
                echo '<li>' . $mes . '</li>';
            }
        ?>
    </ul>
</body>
</html>