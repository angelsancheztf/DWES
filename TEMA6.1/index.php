<?php
    $servername = "localhost";
    $database = "world";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

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
    <!--<script src="scripts.js"></script>-->
</head>
<body>
    <!--Solo ciudades-->

    <form action="bbdd.php" method='get'>
        <select name='pais'>
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

    <!--<form action="getCities.php" method="get">-->
    <br><br>
    <!--<input type="submit" value="Peticion AJAX XMLHTTPREQUEST " name="button" onclick=" recogeCiudades('getCities.php') ">-->
    <button onclick="botonXML()">XML</button>
    <br><br>
    <!--<input type="submit" value="Peticion AJAX JQUERY" name="button" id="ho" onclick="botonQuery()">-->
    <button onclick="botonQuery()">JQuery</button>
    <!--</form>-->
    <script>
    

        function botonQuery() {
            let req = new XMLHttpRequest();
            var pais = document.getElementById("pais").value;
            console.log(pais);

            req.open("GET", 'http://localhost/dwes21/TEMA6.1/bbdd.php', true);
            req.onreadystatechange = () => {
                if(req.readyState == 4){
                    document.getElementById("hola").innerHTML = req.responseText;
                }
            }
            var data = new FormData();
            data.append('country', pais);

            req.send(data);
        }

        function botonXML(){
            if (window.XMLHttpRequest) {
                var http_request = new XMLHttpRequest();
            } else if (window.ActiveXObject) {
                var http_request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            http_request.open(
                'GET',
                url,
                true
            );

            http_request.send();

            if (http_request.readyState == 4 && http_request.status == 200) {
                alert("todo va bien");
            } else {
                alert("algo falla");
            }


            $.ajax({
                type: "POST",
                url: 'getCities.php',
                data: {
                    selectCountry: country.value
                },
                success: function(response) {
                    var element = document.getElementById("");
                    element.innerHTML = response;
                }
            });
        }
    </script>
</body>
</html>