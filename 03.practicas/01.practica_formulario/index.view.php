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
        <div>
            <h2>Formulario</h2>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre" value="<?php if(!$sended && isset($name)) echo $name?>">
            <input type="text" class="form-control" name="mail" placeholder="Ingresa tu correo electronico" value="<?php if(!$sended && isset($name)) echo $mail?>">
            <textarea class="form-control" name="message" placeholder="Escribe tu mensaje"><?php if(!$sended && isset($msg)) echo $msg; ?></textarea>

            <?php if(!empty($errors)): ?>
                <div class="alert error">
                    <?php echo $errors; ?>
                </div>
            <?php elseif($sended): ?>
                <div class="alert success">Formulario enviado correctamente.</div>
            <?php endif ?>
            <input type="submit" name="submit-form" value="Enviar" class="btn btn-primary">
        </form>
    </div>
</body>
</html>