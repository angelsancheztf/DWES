<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <FORM action ="ejer18.php" METHOD="POST">
        Email: <input type="text" name="email"></br>
        Password: <input type="text" name="password"></br>
        <input type="submit" value="Validar" />
    </FORM>
    <?php
    //Crea la función existeUsuario que reciba por parámetro un email y contraseña, conecte a la base de datos MEDAC y 
    //consulte en la tabla usuarios si existe, devolviendo true si ha encontrado el usuario o false en caso contrario.
    $email=$_POST["email"];
    $password=$_POST["password"];
    existeUsuario($email, $password, $datos);
      
    $servername = "localhost";
    $database = "medac";
    $username = "root";
    $password = "";
        
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }
    echo "Conectado correctamente"."<br/>";

    $consulta = "SELECT * FROM usuarios";

    mysqli_select_db($conn,"medac");

    $datos = mysqli_query($conn,$consulta);


    function existeUsuario($email, $password, $datos){

        foreach ($datos as $clave => $valor){
            if ($email == $valor["user1@alu.medac.es"] ){ 
                if ($password == $valor["1234"] ){
                    echo "Correcto, puedes pasar!"; 
                }else{
                    echo "Contraseña incorrecta"; 
                }         
            }else{
                echo "Email incorrecto";         
            } 
        }
    }

    ?>
</body>
</html>