<?php
session_start();
echo "Sesion iniciada <br>";
$_SESSION["id"] = "Usuario1";
echo "Se ha creado una sesion con el nombre de usuario: ". $_SESSION["id"]."<br>";

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