<?php
session_start();

echo "Bienvenido de nuevo ". $_SESSION["id"];

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="acceso2.php">Pincha aquí para acceder de nuevo a la sesión</a>
</body>
</html>