<?php
session_start();

if($_SESSION){
    $name = $_SESSION['name'];
    echo '<h2>Hi!, ' . $name . '</h2>';
}else{
    echo '<h2>You are not logged in. Please log in and try again</h2>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions - Page 02</title>
</head>
<body>
    <h5>Page 02</h5>
    <a href="logout.php">Logout</a>
</body>
</html>