<?php
session_start();
session_destroy(); // elimina la variable $_SESSION
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <h2><?php echo $_SESSION ? 'User ' . $_SESSION['name'] . ' was logged out.' : 'You have to login first.'; ?></h2>
</body>
</html>