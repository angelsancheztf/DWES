<?php
    /*
    * Conexión a la base de datos 
    */

    $servername = "localhost";
    $database = "world";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    /*
    * La consulta que hacemos para recoger los datos de la BBDD. 
    */
    
    $consulta_paises_1 = "SELECT `Code`, `Name` FROM `country`";

    mysqli_select_db($conn, "world");

    $datos = mysqli_query($conn, $consulta_paises_1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="scripts1.js"></script>
</head>
<body>
    <!--Solo ciudades-->

    <form action="bbdd.php" method='get'>
        <select id="pais" name='pais'>
            <?php
            if ($datos->num_rows > 0) {
                foreach ($datos as $clave => $valor) {
                    echo "<option value='" . $valor['Code'] . "'>" . $valor['Name'] . "</option>";
                }
            }
            ?>
        </select>

        <br><br>
        <input type='submit' value='Peticion HTML'>
        <br><br>
    </form>

    <br><br>
    <button onclick="botonXML()" name="pais" id="xml">XML</button>

    <div id="respuesta2"></div>

    <br><br>
    <button onclick="botonQuery()" name="pais" id="jquery">JQuery</button>

    <div id="respuesta"></div>
</body>
</html>