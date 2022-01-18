<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <br><br>
        <input type="Insetar" placeholder="Insetar ciudad nueva">

        <button value="" type="guardar" id="guardar" onclick="insertCity()">Guardar</button>
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

        /*
        * La consulta que hacemos para recoger los datos de la BBDD. 
        */

        $consulta_paises="INSERT INTO city(CountryCode, Name) VALUES ('$pais', '$name')  ;";


        mysqli_select_db($conn,"world");

        $datos_paises = mysqli_query($conn, $consulta_paises);

            if($datos_paises->num_rows > 0){
                foreach ($datos_paises as $clave => $valor){
                    echo $valor['CountryCode'];
                    echo $valor['Name'];
                } 
            } else {
                echo ("Negativo, no se ha guardado");
            }
        ?>
</body>
</html>