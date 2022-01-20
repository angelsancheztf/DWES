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

$consulta_paises="SELECT `ID`, `Name` FROM city WHERE CountryCode = '$pais' ;";


mysqli_select_db($conn,"world");

$datos_paises = mysqli_query($conn, $consulta_paises);

if($datos_paises->num_rows > 0){ ?>

<?php foreach ($datos_paises as $clave => $valor){ ?>
    <br><br>
    <input value=" <?php echo $valor['Name']; ?> ">
    
    <button type="button"
        onclick="saveCity('<?php echo $value["Name"]; ?>')">
        Guardar
    </button>
    <!--<button value=" <?php echo $valor['ID']; ?> " onclick="saveCity()"> Guardar</button>-->
    
    <button type="button" onclick="deleteCity('<?php echo $value["Name"]; ?>')"> Borrar</button>
    <!-- <button value=" <?php echo $valor['ID']; ?> " onclick="deleteCity()"> Borrar</button> -->
      
<?php } ?>

<?php } ?>

