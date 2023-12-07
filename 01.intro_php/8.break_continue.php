<?php
/**
 * break; sentencia que detiene la ejecución de un ciclo o función.
 * continue; sentencia que "ignora" la iteración en turno, sin detener las demás.
 */

$paises = ['México', 'España', 'Alemania', 'Canadá', 'USA', 'Francia', 'Inglaterra', 'Japón', 'India'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break - Continue</title>
</head>
<body>
    <h2>Lista completa de países</h2>
    <ul>
    <?php
        foreach($paises as $country){
            echo '<li>' . $country . '</li>';
        }
    ?>
    </ul>

    <h2>Muestrame la lista hasta Canadá</h2>
    <ul>
    <?php
        foreach($paises as $country){
            echo '<li>' . $country . '</li>';
            if($country == 'Canadá'){
                break; // imprime 'Canadá' y luego termina el ciclo.
            }
        }
    ?>
    </ul>

    <h2>Omite a USA</h2>
    <ul>
    <?php
        foreach($paises as $country){
            if($country == 'USA'){
                continue; // Se salta el código que imprime USA y continúa con las demás iteraciónes.
            }
            echo '<li>' . $country . '</li>';
        }
    ?>
    </ul>    
</body>
</html>