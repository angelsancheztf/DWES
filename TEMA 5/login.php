
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.php</title>
</head>
<body>
    
    <?php
    //Utilizamos la función existeUsuario para conectar a la BD y comprobar si existe el usuario.
    //Si no existe, redirigimos de nuevo a index.php mostrando error no existe usuario.
    //Si existe creamos sesión y guardamos en la variable de sesión el email del usuario.
    //Redirigimos a dashboard.php.
    /*
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

    $usuario_correcto = "angel";
    $password_correcta = "elpepe2";
    $email_correcto = "an@medac.es";

    $usuario = $_POST["usuario"];
    $password = $_POST["contraseña"];
    $email = $_POST["email"];
*/

        $email = $_POST["email"];
        $contraseña = $_POST["contraseña"];

        function existeUsuario($email, $contraseña){

            $servername = "localhost";
            $database = "medac";
            $username = "root";
            $password = "";
                    
            $conn = mysqli_connect($servername, $username, $password, $database);
    
            if(!$conn) {
                die("Connection failed: ".mysqli_connect_error());
            }
            echo "Conectado correctamente"."<br/>";
            
            $consulta="SELECT * FROM usuarios WHERE email='$email' && password='$contraseña';";
            
            mysqli_select_db($conn,"medac");
    
            $datos = mysqli_query($conn,$consulta);
            
            //print_r($contraseña);
                foreach ($datos as $clave => $valor){

                    $email = $valor["email"];
                    $password = $valor["password"];
                    //$nombre = $valor["nombre"];


                    if (($email == $email) && ($contraseña == $password)){ 
                        session_start();
                        $_SESSION["email"]=$valor["email"];
                        $_SESSION["nombre"]=$valor["nombre"];

                        return true;        
                    }else{
                        //echo "Email incorrecto"."<br>";  
                        return false;       
                    } 
                }
        }
        
        if (existeUsuario($email, $contraseña)) {
            /*
            session_start();
            $_SESSION["id"] = $email;

            echo $_SESSION["id"];
            */
            header("Location: dashboard.php");
        } else {
            /*echo "El usuario o la contraseña son incorrectos"."<br>";
            echo '<a href="index.php">Volver a atras</a>';
            */

            header("Location: index.php?msj=1");
            //die("Connection failed: ".mysqli_connect_error());
            //error_reporting(0);
        }
    ?>
</body>
</html>