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

        function existeUsuario($pais){

            $servername = "localhost";
            $database = "world";
            $username = "root";
            $password = "";
                    
            $conn = mysqli_connect($servername, $username, $password, $database);
    
            if(!$conn) {
                die("Connection failed: ".mysqli_connect_error());
            }
            
            $consulta_paises="SELECT `Name` FROM city WHERE CountryCode = '$pais' ;";
            
            $consulta_country="SELECT `Name` FROM country WHERE Code = '$pais' ;";
            
            $consulta_country_language="SELECT `Language` FROM countrylanguage WHERE CountryCode = '$pais' ;";
            
            
            mysqli_select_db($conn,"world");
            
            $datos_paises = mysqli_query($conn, $consulta_paises);
            $datos_country = mysqli_query($conn, $consulta_country);
            $datos_country_language = mysqli_query($conn, $consulta_country_language);
            

            if(isset($_GET["pais"])){

                echo"<h1>PAISES</h1>";

                if($datos_country->num_rows > 0){
                    foreach ($datos_country as $clave => $valor){
                        echo"<h2>".$valor['Name']."</h2>";
                    } 
                }

                echo"<h1>CIUDADES</h1>";

                if($datos_paises->num_rows > 0){
                    foreach ($datos_paises as $clave => $valor){
                        echo"<h2>".$valor['Name']."</h2>";
                    } 
                }  
                
                echo "<h3>Ciudades =>".$datos_paises->num_rows."</h3>";

                echo"<h1>LENGUAS</h1>";

                if($datos_country_language->num_rows > 0){
                    foreach ($datos_country_language as $clave => $valor){
                        echo"<h2>".$valor['Language']."</h2>";
                    } 
                }   

                echo "<h3>Lenguas =>".$datos_country_language->num_rows."</h3>";

            }
            /*
            if($datos->num_rows>0){
                foreach ($datos as $clave => $valor){

                    $CountryCode = $valor["CountryCode"];
                    $Code = $valor["Code"];
                    $pais = $valor["name"];

                session_start();
                 $_SESSION["id"]=$valor["id"];
                 $_SESSION["lenguajes"]=$valor["lenguajes"];
                
                        return true;        
                }
            }else{
 
                return false;       
            } 
            */
        }
        
        if (existeUsuario($pais)) {
            

            header("Location: world.php");
        }
    ?>

</body>
</html>