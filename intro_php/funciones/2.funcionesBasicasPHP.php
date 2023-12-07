<?php
/**
 * isset(); // Devuelve True si una variable tiene un valor asignado.
 * unset(); // Destruye una variable previamente definida.
 * forEach( $ARRAY as $ELEMENT ); // Permite ejecutar una función por cada elemento de un array. En un array mixto (valores asociativos e indizados) el índice es tratado como el identificador.
 * var_dump(); // Nos muestra información acerca de nuestra variable (ubicación, tipo de dato, tamaño, valor, etc.).
 * print_r(); // Similar a var_dump(); pero con un formato más legible al humano.
 * die(); // Detiene la ejecución del script en ese punto (similar a break), incluyendo etiquetas html.
 * header('Location: URL'); // Redirige al usuario a la URL definida, la palabra "Location" es necesaria (más información en la carpeta "Formularios")
 */

$saludo = 'hola';
$despedida = 'bye';
$players = [
    ['PlayerMe', 'lifepoints' => 18, 'status' => 'normal'],
    ['username' => 'Ninja', 'lifepoints' => 14, 'status' => 'stunned'],
    ['+++TheMentor+++', 'lifepoints' => 16, 'status' => 'frozen']
];
$playerThree = $players[2]; // ['+++TheMentor+++', 'lifepoints' => 16, 'status' => 'frozen']

# unset();
unset($despedida);

#isset();
echo isset($players) ? 'do players exist?: Yes' . '<br/>' : 'do players exist?: No' . '<br/>';
echo isset($despedida) ? 'do despedida exist?: Yes' . '<br/>' : 'do despedida exist?: No'. '<br/>';

# die()
die();

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
    <h2>Players:</h2>
    <ul>
        <?php
            foreach($playerThree as $data => $value){
                echo '<li>' . $data . ': ' . $value . '</li>';
            }
        ?>
    </ul>

    <h2>Var_Dump del jugador 3:</h2>
        <?php
            # var_dump();
            var_dump($saludo);
            echo var_dump($playerThree);
        ?>

    <h2>Print_R del jugador 3:</h2>
        <?php
            # var_dump();
            print_r($saludo);
            echo '<br/>';
            echo '<pre>';
            echo print_r($playerThree);
            echo '</pre>';
        ?>
</body>
</html>