<?php

if(isset($_COOKIE['font-size'])){
    $fontsize = htmlspecialchars($_COOKIE['font-size']); // toma el valor con el Nombre "font-size" desde la cookie. Al ser editable, es preferible protegerse de inyeccion usando htmlspecialchars();
} else {
    $fontsize = '15 px';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text-size = Cookie</title>
    <style>
        p {
            font-size: <?php echo $fontsize ?>;
        }
    </style>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui cumque ducimus at nihil officiis minima perferendis quia debitis tempora temporibus praesentium, quod inventore saepe minus reprehenderit totam veritatis iste rem.</p>
    <p>
        <?php echo date('d/m/Y', time()+60*60*24*30); ?>
    </p>
</body>
</html>