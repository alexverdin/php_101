<!--
    En un formulario la etiqueta <form> maneja diversas acciones.
    Atributo action: documento al que el formulario va a enviar la informacion de los input.
    Atributo method (GET, POST) Es la forma en la que el formulario envía la información:
        GET: Envía la información por medio de la URL.
        POST: Envía la información por medio del método POST de HTTP, usando los atributos de cada input:
            array(input_1 NAME => input_1 VALUE, input_2 NAM> => input_2 VALUE, ...);
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <h1>Formularios</h1>
    <input type="button" onclick="window.location.href='form_post.php';" value="Formulario Post" />
    <input type="button" onclick="window.location.href='form_get.php';" value="Formulario Get" />
    <input type="button" onclick="window.location.href='form_self.php';" value="Formulario Self" />
</body>
</html>