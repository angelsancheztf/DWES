<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Mostrar “Mi email es: xxxx” si el usuario se ha logueado correctamente y enlace a logout.php para cerrar sesión.
    //Si no se ha logueado correctamente, redirigirá a index.php con mensaje de error.
    session_start();

    if (empty($_SESSION["usuario"])) {
        header("Location: index.php");
        exit();
    }

    echo "Mi email es: ". $_SESSION["email"];

    ?>

    <p>
        Hola mundo, soy un párrafo HTML que solamente pueden ver los usuarios logueados
    </p>

    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
