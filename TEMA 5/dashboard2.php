<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard2.php</title>
</head>
<body style: <?php echo "$_COOKIE[color]" ?> ;>

    <p>Volver a dashboard:
    <form action="dashboard.php">
        <input type="submit" value="Volver">
    </form>
    </p>
    <br>
    
    <a href="logout.php">Para poder cerrar sesión aquí</a>

    <?php
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

    //setcookie("color",$_POST["color"],time()+3600*21);
    setcookie("color",$_GET["color"],strtotime("3600*21"), "/");

    if(!isset($_SESSION["email"])){

        header("Location: index.php?msj=2");
    
    }

    ?>
</body>
</html>