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
    <title>index.php</title>
</head>
<body>
    <form action="world.php" method='get'>
        <select name='pais'>
            <?php
                if($datos->num_rows > 0){
                    foreach ($datos as $clave => $valor){
                        echo"<option value='".$valor['Code']."'>".$valor['Name']."</option>";
                    }
                }
            ?>
        </select>
        <br><br>
        <input type='submit' value='Inicia'>
        <br><br>
    </form>
<!--Hacer tabla para numero 4, boton volver atras, intento todo un mismo archivo, cambiar value de todos los botones-->
    <form action="world2.php" method="get">
        <input type="submit" value="0" name="button">
        <input type="submit" value="1" name="button">
        <input type="submit" value="2" name="button">
        <input type="submit" value="3" name="button">
        <input type="submit" value="4" name="button">
        <input type="submit" value="5" name="button">
    </form>
</html>