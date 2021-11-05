<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard.php</title>
</head>
<body style= "color: <?php echo $_COOKIE["color"] ?>" >
    <form method="post" action="dashboard2.php"><br>
        <input type="radio" value="#ff0000" name="color"><span style="color: red;">Rojo</span>
        <input type="radio" value="#0000ff" name="color"><span style="color: blue;">Azul</span>
        <input type="radio" value="#00ff00" name="color"><span style="color: green;">Verde</span>
        <br><br>
        <input type="submit" value="Cambiar">
    </form>

    <!--<br>
    <a href="logout.php">Para cerrar sesión aquí</a>
    <br>-->
    <?php
    //Mostrar “Mi email es: xxxx” si el usuario se ha logueado correctamente y enlace a logout.php para cerrar sesión.
    //Si no se ha logueado correctamente, redirigirá a index.php con mensaje de error.
    /*
    session_start();

    if (empty($_SESSION["usuario"])) {
        header("Location: index.php");
        exit();
    }
    /*
    if (empty($_SESSION["email"])) {
        header("Location: index.php");
        echo "Mi email es: ". $_SESSION["email"];
        exit();
    } else {
        echo "No se ha logueado correctamente"."<br>";
        echo '<a href="index.php">Volver a atras</a>';
    }
    */
    session_start();

    function inactivo(){

        $tiempoInactivo = 60; 
      
        if(isset($_SESSION["timeout"])){ 
            $sessionTTL = time()-$_SESSION["timeout"];  
   
            if($sessionTTL > $tiempoInactivo){            
                session_destroy();            
                header("Location: index.php?msj=4");
    
            }    
        }  
        $_SESSION["timeout"] = time();
        
    }
    
    inactivo();
    
    echo "
    <br> Sesión iniciada: 
    <br> Email: ".$_SESSION["email"]." 
    <br> Nombre: ".$_SESSION["nombre"]." ";

    if(!isset($_SESSION["email"])){
        /*echo "Mi email es ".$_SESSION["id"];*/
        header("Location: index.php?msj=2");
    }
    /*else{
        /*echo "Debes iniciar sesión previamente.";
        
    }*/

    if(isset($_COOKIE["color"])){

        $color = $_COOKIE["color"];
    }
    /*
    $value = 'Probando una cookie';
    setcookie("TestCookie", $value);
    setcookie("TestCookie", $value, time()+3600);
    setcookie("TestCookie", $value, time()+3600, "/");

    setcookie('TestCookie', 'rojo', time() + 42000);
    */
    ?>

    <p>
        Hola mundo, soy un párrafo HTML que solamente pueden ver los usuarios logueados
    </p>

    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
