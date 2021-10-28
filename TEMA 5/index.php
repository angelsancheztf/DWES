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
    //Formulario para iniciar sesión (action=“login.php”) si no ha iniciado sesión
    //Mostrar “Mi email es: xxxx” si ha iniciado sesión y enlace a dashboard.php
    //echo "Mi email es: ";
    //header("Location: dashboard.php");
    /*
    if (empty($_SESSION["email"])) {
        echo "Mi email es: ".$_SESSION["email"];
        header("Location: index.php");
    } else {
        header("Location: dashboard.php");
    }
    */
    session_start();

    if($_SESSION["id"] != null || $_SESSION["id"] != ""){
        echo "Mi email es: ".$_SESSION["id"];
        header("Location: dashboard.php");
    } else {
        echo "<form action='login.php' method='POST'>";
        echo "Escribe tu nombre de usuario: <input name='usuario' type='text'>";
        echo "<br><br>";
        echo "Contraseña: <input name='contraseña' type='password'>";
        echo "<br><br>";
        echo "<input type='submit' value='Iniciar sesión'>";
        echo "</form>";
    }
    ?>
</body>
</html>
