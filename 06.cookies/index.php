<?php
/**
 * Las cookies nos permiten almacenar información localmente en el equipo y evitar la eliminación de la misma al cerrar el navegador.
 * 
 * La forma de crear una cookie es con la función "setcookie()"
 * setcookie('nombre-del-dato', 'valor-a-almacenar', tiempo-vigencia-cookie, '/ruta-cookie-disponible' )
 * # Cookie con validez de un mes:
 * # time() + SEGUNDOS * MINUTOS * HORAS * DIAS; // ojo, inmediatamente despues de la funcion time() hay un '+'
 * 
 * Podemos accesar a la información almacenada en la cookie mediante la variable:
 * $_COOKIE['nombre-del-campo'];
 * 
 * Una cookie puede almacenar máximo 4MB de información.
 * 
 */

setcookie('font-size', '25px', time() + 60 * 60 * 24 * 30, '/'); //cookie de un mes a partir del momento actual. Valor: 30px

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h2>Cookie setted</h2>
    <a href="./text-size.php">Cookie to font-size</a>
</body>
</html>
