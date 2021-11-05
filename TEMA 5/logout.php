<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout.ph</title>
</head>
<body>
    <?php
    //Cierra sesión y redirige a login.php mostrando mensaje “Sesión cerrada correctamente”
    session_start();
    session_destroy();
    //sleep(10);
    //setcookie("color", "red", time()-60);
    header("Location: index.php?msj=3");
    ?>
</body>
</html>
