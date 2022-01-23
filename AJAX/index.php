<?php
// conexion a la bbdd.
$servername = "localhost";
$database = "world";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// La consulta que hacemos para recoger los datos de la BBDD.
$consulta_country = 'SELECT Code,Name FROM country';

mysqli_select_db($conn, "world");

$datos = mysqli_query($conn, $consulta_country);

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="scripts.js"></script>
</head>

<body>
    <div class="container" style="margin-top: 50px">
        <form action="mostrar.php" method="post">
            <select name="country" id="country">
                <option>Seleccione un país:</option>

                <?php
                if ($datos->num_rows > 0) {
                    foreach ($datos as $clave => $valor) {
                        echo "<option value='" . $valor['Code'] . "'>" . $valor['Name'] . "</option>";
                    }
                }
                ?>

            </select>
        </form>
        <br><br>
        <!--Mostramos las ciudades-->
        <button onclick="show()">Mostrar ciudades</button>
        <!--Insertamos ciudades nuevas-->
        <button onclick="insertCity()">Insertar ciudad</button>
        <!--Copiamos las ciudades a una nueva bbdd-->
        <button onclick='copyCity(document.getElementById("country").value)'>Copiar ciudades</button>
        <br><br>

        <!--Botón para guardar ciudades nuevas-->
        <div id="guardar" hidden="true">
            <input type='text' id='newCity'>
            <button type='button'
                onclick='save(document.getElementById("newCity").value, document.getElementById("country").value)'>
                Guardar
            </button>
        </div>
        <br>
        <div id="resultado"></div>

        <script>
            // insertamos ciudades nuevas
            function insertCity() {
                $(document).ready(function() {
                    $('#guardar').attr("hidden", false);
                    console.log(document.getElementById("country").value);

                    setTimeout(function() {
                        $('#guardar').attr("hidden", true);
                        $('#newCity').val("");
                    }, 4000);
                });
            }
        </script>
    </div>
</body>
</html>
