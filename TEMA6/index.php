<?php
    $servername = "localhost";
    $database = "world";
    $username = "root";
    $password = "";
            
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }
    
    $consulta_paises_1="SELECT `Code`, `Name` FROM `country`";
    
    mysqli_select_db($conn, "world");

    $datos = mysqli_query($conn, $consulta_paises_1);
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
        
        <input type='submit' value='Inicia'>
        <br><br>
    </form>

    <form action="world2.php" method="get">
        <input type="submit" value="10 CIUDADES con más población del mundo" name="button">
        <br><br>
        <input type="submit" value="10 PAÍSES con mayor tamaño de área demográfica del mundo" name="button">
        <br><br>
        <input type="submit" value="10 PAÍSES con menor esperanza de vida" name="button">
        <br><br>
        <input type="submit" value="Número de PAÍSES por cada continente" name="button">
        <br><br>
        <input type="submit" value="Número de CIUDADES por cada continente" name="button">
        <br><br>
        <input type="submit" value="10 PAÍSES donde el idioma español sea el que más se hable y sea idioma oficial" name="button">
    </form>
</html>