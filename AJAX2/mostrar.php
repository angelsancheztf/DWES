<?php
// Con este post recojo el nombre del codigo del país seleccionado
$select_country = $_POST["country"];

// conexion a la bbdd
$servername = "localhost";
$database = "world";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// La consulta que hacemos para recoger los datos de la BBDD.
$consulta_city = "SELECT Name FROM city WHERE CountryCode='$select_country'";

mysqli_select_db($conn, "world");

$datos_ciudad = mysqli_query($conn, $consulta_city);

?>

<html>
<title>Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./scripts.js"></script>

<body>
    <div class=" container">
            <?php
            $count = 1;

            foreach ($datos_ciudad as $value => $valor) {

            ?>
                    <br><br>
                    <input type="text" id="<?php echo $count; ?>"
                        value="<?php echo $valor["Name"]; ?>">
                
                    <button type="button"
                        onclick="saveCity('<?php echo $valor["Name"]; ?>', document.getElementById('<?php echo $count; ?>').value)">
                        Guardar
                    </button>

                    <button type="button" onclick="deleteCity('<?php echo $valor["Name"]; ?>')">
                        Borrar 
                    </button>


                <?php
                $count++;
            }
                ?>
    </div>
</body>
</html>