<?php

$servername = "localhost";
$database = "world";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


mysqli_select_db($conn, "world");

if (isset($_GET["button"])) {

    $consulta_ciudad = "SELECT `Name` FROM `city` ORDER BY Population DESC LIMIT 10 ";

    $datos_ciudad = mysqli_query($conn, $consulta_ciudad);


    /*if($datos_ciudad->num_rows > 0){
        foreach ($datos_ciudad as $clave => $valor){
            echo"<h3>".$valor['Name']."</h3>";
        } 
    }
    */

    if ($datos_ciudad->num_rows > 0) { ?>
        <table border="2">
            <tr>
                <th>Ciudades</th>

            </tr>
            <?php foreach ($datos_ciudad as $clave => $valor) { ?>
                <tr>
                    <td> <?php echo $valor['Name']; ?> </td>

                </tr>
            <?php } ?>
        </table>
    <?php } ?>
<?php
}
?>