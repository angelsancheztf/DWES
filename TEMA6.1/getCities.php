<?php

/*
* Este if sirve para recoger el get y la variable del index. 
*/

if(isset($_GET["pais"])){
    $pais = $_GET["pais"];
}

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

$consulta_paises="SELECT `Name` FROM city WHERE CountryCode = '$pais' ;";

mysqli_select_db($conn,"world");

$datos_paises = mysqli_query($conn, $consulta_paises);

/*
* Hacemos un if para recoger los datos proporcionados por la BBDD, para después
* poder mostrarlo por pantalla.
* En el if lo que se hace es comprobar si existen filas como para poder mostrar, y
* si no hubiera ninguna no saldría nada por pantalla.
* Los datos de la BBDD se muestran por pantalla en el 2º th y en el td. 
* En el 2º th se muestran el número exacto de todas las ciudades seleccionados por el usuario.
* En el td se muestran los nombres de todas las ciudades.
*/

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