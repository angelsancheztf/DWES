<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <?php
    //Crea la función existeUsuario que reciba por parámetro un email y contraseña, conecte a la base de datos MEDAC y 
    //consulte en la tabla usuarios si existe, devolviendo true si ha encontrado el usuario o false en caso contrario.
    $email=$_POST["email"];
    $password=$_POST["password"];
    existeUsuario($email, $password);
      


    function existeUsuario($email, $password){

        $servername = "localhost";
        $database = "medac";
        $username = "root";
        $pass = "";
            
        $conn = mysqli_connect($servername, $username, $pass, $database);

        if(!$conn) {
            die("Connection failed: ".mysqli_connect_error());
        }
        echo "Conectado correctamente"."<br/>";

        $consulta = "SELECT * FROM usuarios WHERE email = '$email' AND password = $password";

        mysqli_select_db($conn,"medac");

        $datos = mysqli_query($conn,$consulta);
        echo "Hola";
        print_r($datos);
            foreach ($datos as $clave => $valor){
                if ($valor == $email){ 
                    if ($valor == $password){
                        echo "Correcto, puedes pasar!"; 
                        return true;
                    }else{
                        echo "Contraseña incorrecta";
                        return false; 
                    }         
                }else{
                    echo "Email incorrecto";  
                    return false;       
                } 
            }
    }

    ?>
</body>
</html>