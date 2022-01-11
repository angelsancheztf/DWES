<?php

if(isset($_GET["pais"])){
    $pais = $_GET["pais"];
}

$servername = "localhost";
$database = "world";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$consulta_paises="SELECT `Name` FROM city WHERE CountryCode = '$pais' ;";

mysqli_select_db($conn,"world");

$datos_paises = mysqli_query($conn, $consulta_paises);

echo "<h1>CIUDADES</h1>";
//echo "<h4>Ciudades =>".$datos_paises->num_rows."</h4>";

/*if($datos_paises->num_rows > 0){
                    foreach ($datos_paises as $clave => $valor){
                        echo"<h3>".$valor['Name']."</h3>";
                    } 
                } */

if ($datos_paises->num_rows > 0) { ?>
    <table border="2">
        <tr>
            <th>CIUDADES</th>
            <th><?php echo "<h4>Ciudades =>" . $datos_paises->num_rows . "</h4>"; ?></th>
        </tr>
        <?php foreach ($datos_paises as $clave => $valor) { ?>
            <tr>

                <td> <?php echo $valor['Name']; ?> </td>

            </tr>
        <?php } ?>
    </table>
<?php } ?>