<?php
/**
 * Una sesión es una restricción de acceso a ciertas páginas de nuestro proyecto, dependiendo de si el usuario tiene autorización para verlas o no.
 * 
 * Se maneja mediante las funciones "session_***()"
 * En cada página donde se van a trabajar sesiones se agrega la función "session_start()"
 * Cuando deseemos des-loguear a un usuario, usaremos la funcion "session_destroy();"
 * 
 * La sintaxis para crear una sesión es "$_SESSION['identificador-de-las-sesion'] = 'valor';"
 * Mientras $_SESSION['identificador-de-las-sesion'] tenga un valor, el usuario podrá navegar en las páginas que requieran una sesion abierta.
 */
session_start();

$_SESSION['name'] = 'Alex';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones - Inicio</title>
</head>
<body>
    <h2>Index</h1>
    <p></p>
    <a href="./page02.php">Page 02</a>
</body>
</html>