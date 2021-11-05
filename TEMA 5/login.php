
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.ph</title>
</head>
<body>
    
    <?php
    //Utilizamos la función existeUsuario para conectar a la BD y comprobar si existe el usuario.
    //Si no existe, redirigimos de nuevo a index.php mostrando error no existe usuario.
    //Si existe creamos sesión y guardamos en la variable de sesión el email del usuario.
    //Redirigimos a dashboard.php.

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
            
            if($datos->num_rows>0){
                foreach ($datos as $clave => $valor){

                    $email = $valor["email"];
                    $password = $valor["password"];


                session_start();
                 $_SESSION["email"]=$valor["email"];
                 $_SESSION["nombre"]=$valor["nombre"];

                        return true;        
                }
            }else{
 
                return false;       
            } 
        }
        
        if (existeUsuario($email, $contraseña)) {

            header("Location: dashboard.php");
        } else {

            header("Location: index.php?msj=1");

        }
    ?>
</body>
</html>