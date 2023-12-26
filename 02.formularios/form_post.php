<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Formulario POST</title>
</head>
<body>
    <h1>Form POST</h1>
    <form action="recibe_post.php" method="post">
        <input type="text" placeholder="Your Name" name="nombre">
        <br>
        <!-- el "id" debe corresponder con el 'for' del label para que se relacionen entre si -->
        <label for="male">Masculino</label>
        <input type="radio" name="gender" id="male" value="male">
        <br>
        <!-- El "name" debe ser el mismo en ambos inputs para que permita seleccionar solo uno de ellos -->
        <label for="fem">Femenino</label>
        <input type="radio" name="gender" id="fem" value="female">
        <input type="number" name="number" id="number">
        <br>
        <label for="year">Año de nacimiento: </label>
        <select name="year" selected="2000" id="year">
            <?php
                for($i = 1930; $i<2024; $i++){
                    if($i === 2000){
                        echo '<option value=2000 selected="selected">2000</option>';
                    }else{
                        echo '<option value='.$i.'>'.$i.'</option>';
                    }
                };
            ?>
        </select>
        <br>
        <label for="terminos">Aceptar terminos y condiciones</label>
        <input type="checkbox" value="ok" name="terminos" id="terminos">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>