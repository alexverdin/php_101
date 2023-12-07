<?php
/**
 * for([variable inicial] ; [condicion de control] ; [incremento/decremento]){};
 * while([condicion de control]){};
 * do{ ...}while([condicion de control]);
 */

$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

$meselegido = 'Octubre';

echo '<h1>Listado:</h1>';
for($i = 0; $i < count($meses); $i++){
echo $meses[$i] . '<br/>';
}

$j = 0;
while($meses[$j] !== $meselegido || $j < count($meses)){
    if($meses[$j] === $meselegido){
        echo '<p>Mes <b>' . $meselegido . '</b> Encontrado!</p>';
        break;
    }
    $j++;
};

 ?>