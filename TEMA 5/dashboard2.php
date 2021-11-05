<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard2.php</title>
</head>
<body style= "color: <?php echo $_COOKIE["color"] ?>" >

    <p>Volver a atrás:
    <form action="dashboard.php">
        <input type="submit" value="Volver">
    </form>
    </p>

    <?php
    session_start();

    if(isset($_POST["color"])){
        setcookie("color",$_POST["color"],strtotime("3600*21"), "/");
    }

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
    <br> Nombre: ".$_SESSION["nombre"]." <br>";



    if(!isset($_SESSION["email"])){

        header("Location: index.php?msj=2");
    
    }

    ?>
    <a href="logout.php">Cerrar sesión aquí</a>
</body>
</html>