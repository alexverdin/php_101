<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica Formulario</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class='wrapper'>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre" id="name">
            <input type="text" class="form-control" name="mail" placeholder="Ingresa tu correo electronico" id="mail">
            <textarea class="form-control" name="message" id="message">
            </textarea>
        </form>
    </div>
</body>
</html>