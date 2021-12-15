<?php
    $servername = "localhost";
    $database = "world";
    $username = "root";
    $password = "";
            
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }
    
    $consulta_paises="SELECT `Code`, `Name` FROM `country`";
    
    mysqli_select_db($conn, "world");

    $datos = mysqli_query($conn, $consulta_paises);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="world1.php" method='get'>
        <select name='pais'>
            <?php
                if(mysqli_num_rows($datos) > 0){
                    foreach ($datos as $clave => $valor){
                        echo"<option value='".$valor['Code']."'>".$valor['Name']."</option>";
                    }
                }
            ?>
        </select>
        <br><br>
        <input type='submit' value='Iniciar sesión'>
        <br><br>
    </form>
</body>
</html>