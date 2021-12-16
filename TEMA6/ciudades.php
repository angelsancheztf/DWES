<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>world.php</title>
</head>
<body>
    <?php

    $pais = $_GET["pais"];

        function existePais($pais){

            $servername = "localhost";
            $database = "world";
            $username = "root";
            $password = "";
                    
            $conn = mysqli_connect($servername, $username, $password, $database);
    
            if(!$conn) {
                die("Connection failed: ".mysqli_connect_error());
            }
            
            $consulta_poblacion="SELECT `Name` FROM `city` ORDER BY Population DESC LIMIT 10 ";
            
            mysqli_select_db($conn,"world");
            
            $datos_poblacion = mysqli_query($conn, $consulta_poblacion);
            

            if(isset($_GET["pais"])){

                echo"<h1>PAIS</h1>";
                echo "<h4>Pais =>".$datos_poblacion->num_rows."</h4>";

                if($datos_poblacion->num_rows > 0){
                    foreach ($datos_poblacion as $clave => $valor){
                        echo"<h3>".$valor['Name']."</h3>";
                    } 
                } 

            }
        }
        
        if (existePais($pais)) {
        
            header("Location: index.php");

        }
    ?>

</body>
</html>