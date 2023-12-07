<?php
/**
 * Este formulario envía la información a la variable $_POST de este mismo documento.
 * action="" en la etiqueta <form> equivale a enviar la informacion a este mismo documento, pero no se recomienda pues muchos navegadores no saben interpretarlo.
 * El metodo recomendado es usar la funcion: <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> para recuperar dinamicamente el nombre del documento actual y agregar seguridad contra inyeccion de scripting HTML.
 */
    if($_POST){
        echo $_POST['nombre'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario POST</title>
</head>
<body>
    <h1>Form POST - SELF</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <input type="text" placeholder="Your Name" name="nombre">
        <br>
        <!-- el "id" debe corresponder con el 'for' del label para que se relacionen entre si -->
        <label for="male">Masculino</label>
        <input type="radio" name="gender" id="male" value="male">
        <br>
        <!-- El "name" debe ser el mismo en ambos inputs para que permita seleccionar solo uno de ellos -->
        <label for="fem">Femenino</label>
        <input type="radio" name="gender" id="fem" value="female">
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