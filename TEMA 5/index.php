<?php
  require_once 'oauth/vendor/autoload.php';
  require 'oauth/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
</head>
<body>
    <form action='login.php' method='POST'>
        Email: <input name='email' type='email'>
        <br><br>
        Contraseña: <input name='contraseña' type='password'>
        <br><br>
        <input type='submit' value='Iniciar sesión'>
        <br><br>
    </form>

    <form action="../index.html">
        <input type='submit' value='Cerrar sesión'>
    </form>

    <?php
        echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
    ?>

    <?php
    //Formulario para iniciar sesión (action=“login.php”) si no ha iniciado sesión
    //Mostrar “Mi email es: xxxx” si ha iniciado sesión y enlace a dashboard.php

    session_start();
    
    if(isset($_GET["msj"])){

        if($_GET["msj"]=="1"){
            echo '<script language="javascript">alert("El usuario y la contraseña introducida no es correcta.");</script>';
        }
    
        if($_GET["msj"]=="2"){
            echo '<script language="javascript">alert("Debes iniciar sesión previamente. ");</script>';
        }
    
        if($_GET["msj"]=="3"){  
            echo '<script language="javascript">alert("Su sesión se ha cerrado correctamente. ");</script>';
        }

        if($_GET["msj"]=="4"){  
            echo '<script language="javascript">alert("Su sesión ha caducado. ");</script>';
        }
    
    }
    ?>
</body>
</html>
