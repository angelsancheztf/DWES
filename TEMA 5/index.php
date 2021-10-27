<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        Escribe tu nombre de usuario: <input name="usuario" type="text">
        <br><br>
        Contraseña: <input name="contraseña" type="password">
        <br><br>
        Email: <input name="email" type="email">
        <br><br>
        <input type="submit" value="Iniciar sesión">
    </form>
    <?php
    //Formulario para iniciar sesión (action=“login.php”) si no ha iniciado sesión
    //Mostrar “Mi email es: xxxx” si ha iniciado sesión y enlace a dashboard.php
    //echo "Mi email es: ";
    //header("Location: dashboard.php");
    if (empty($_SESSION["email"])) {
        echo "Mi email es: ".$_SESSION["email"];
        header("Location: index.php");
    } else {
        header("Location: dashboard.php");
    }

    ?>
</body>
</html>
