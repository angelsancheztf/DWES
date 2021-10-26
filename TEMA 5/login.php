
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
    //<a href="TEMA 4/ejer18.php">Conexion</a>
    //Utilizamos la función existeUsuario para conectar a la BD y comprobar si existe el usuario.
    //Si no existe, redirigimos de nuevo a index.php mostrando error no existe usuario.
    //Si existe creamos sesión y guardamos en la variable de sesión el email del usuario.
    //Redirigimos a dashboard.php.
    $usuario_correcto = "angel";
    $contraseña_correcta = "elpepe2";
    $email_correcto = "an@medac.es";

    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $email = $_POST["email"];

if ($usuario === $usuario_correcto && $contraseña === $contraseña_correcta && $email === $email_correcto) {
    //===; chequea el contenido de la variable y además, chequea que las dos variables sean del mismo tipo.
    session_start();
    $_SESSION["usuario"] = $usuario;
    $_SESSION["email"] = $email;
    header("Location: dashboard.php");
} else {//if($usuario !== $usuario_correcto && $contraseña !== $contraseña_correcta && $email !== $email_correcto){
    echo "El usuario o la contraseña son incorrectos"."<br>";
    echo '<a href="index.php">Volver a atras</a>';
} //else {
    //echo "El usuario o la contraseña son incorrectos";
    
    //header("Location: index.php");
    
//}

    
    ?>
</body>
</html>