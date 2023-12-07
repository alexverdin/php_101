<?php
/**
 * Documento principal, no necesariamente debe ser una vista.
 * include 'archivo-a-importar.php'; // Nos permite importar un documento para trabajar con él en otro sitio. Arroja 'WARNING' como error (Permite continuar con la ejecucion del script).
 * require 'archivo-a-importar.php'; // nos permite importar un documento para trabajar con él en otro sitio. Arroja 'FATAL ERROR' como error (Detiene la ejecucion del codigo).
 * include_once 'archivo-a-importar.php'; // similar a include, pero permite usar la instancia importada SOLO una vez.
 * require_once 'archivo-a-importar.php'; // similar a require, pero permite usar la instancia importada SOLO una vez.
 * 
 */

include './funciones.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include - Require</title>
</head>
<body>
    <?php include_once 'helloWorld.php'; ?>
    <h3>
        <?php echo 'Suma desde \'funciones.php\': ' . suma(3,6); ?> <!-- Importado desde './funciones.php' -->
    </h3>
</body>
</html>