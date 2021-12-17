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

if(isset($_GET["pais"])){
    $pais = $_GET["pais"];
}

        function existePais($pais){

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

                echo"<h1>PAIS</h1>";
                echo "<h4>Pais =>".$datos_country->num_rows."</h4>";

                if($datos_country->num_rows > 0){
                    foreach ($datos_country as $clave => $valor){
                        echo"<h3>".$valor['Name']."</h3>";
                    } 
                } 

                echo"<h1>CIUDADES</h1>";
                echo "<h4>Ciudades =>".$datos_paises->num_rows."</h4>";

                if($datos_paises->num_rows > 0){
                    foreach ($datos_paises as $clave => $valor){
                        echo"<h3>".$valor['Name']."</h3>";
                    } 
                }  

                echo"<h1>LENGUAS</h1>";
                echo "<h4>Lenguas =>".$datos_country_language->num_rows."</h4>";

                if($datos_country_language->num_rows > 0){
                    foreach ($datos_country_language as $clave => $valor){
                        echo"<h3>".$valor['Language']."</h3>";
                    } 
                }
            }
        }
/*
if(isset($_GET["poblacion"])){
$poblacion = $_GET["poblacion"];
}

if(isset($_GET["surfacearea"])){
$surfacearea = $_GET["surfacearea"];
}

if(isset($_GET["lifeexpectancy"])){
$lifeexpectancy = $_GET["lifeexpectancy"];
}

if(isset($_GET["continente_pais"])){
$continente_pais = $_GET["continente_pais"];
}

if(isset($_GET["continente_ciudad"])){
$continente_ciudad = $_GET["continente_ciudad"];
}

if(isset($_GET["idioma"])){
$idioma = $_GET["idioma"];
}

        function ejercicio2($poblacion, $surfacearea, $lifeexpectancy, $continente_pais, $idioma){

            $servername = "localhost";
            $database = "world";
            $username = "root";
            $password = "";
                    
            $conn = mysqli_connect($servername, $username, $password, $database);
    
            if(!$conn) {
                die("Connection failed: ".mysqli_connect_error());
            }
            

            mysqli_select_db($conn,"world");

            if(isset($_GET["poblacion"])){

                $consulta_ciudad="SELECT `Name` FROM `city` ORDER BY Population DESC LIMIT 10 ";

                $datos_ciudad = mysqli_query($conn, $consulta_ciudad);


                if($datos_ciudad->num_rows > 0){
                    foreach ($datos_ciudad as $clave => $valor){
                        echo"<h3>".$valor['Name']."</h3>";
                    } 
                }
            }

            if(isset($_GET["surfacearea"])){

                $consulta_pais="SELECT `Name`, `Region` FROM `country` ORDER BY SurfaceArea DESC LIMIT 10 ";

                $datos_pais = mysqli_query($conn, $consulta_pais);


                if($datos_pais->num_rows > 0){
                    foreach ($datos_pais as $clave => $valor){
                        echo"<h3>".$valor['Name']."</h3>";
                    } 
                }
            }

            if(isset($_GET["lifeexpectancy"])){

                $consulta_pais_2="SELECT * FROM `country` WHERE LifeExpectancy IS NOT NULL ORDER BY LifeExpectancy ASC LIMIT 10 ";

                $datos_pais_2 = mysqli_query($conn, $consulta_pais_2);


                if($datos_pais_2->num_rows > 0){
                    foreach ($datos_pais_2 as $clave => $valor){
                        echo"<h3>".$valor['Name']."</h3>";
                    } 
                }
            }

            
            if(isset($_GET["continente_pais"])){

                $consulta_pais_3="SELECT COUNT(country.Code) AS Numero_Paises, country.continent AS Continent FROM country GROUP BY country.continent ";

                $datos_pais_3 = mysqli_query($conn, $consulta_pais_3);


                if($datos_pais_3->num_rows > 0){
                    foreach ($datos_pais_3 as $clave => $valor){
                        echo"<h3>".$valor['Numero_Paises']." => ".$valor['Continent']."</h3>";
                        //echo"<h3>".$valor['Continent']."</h3>";
                    } 
                }
            }

            
            if(isset($_GET["continente_ciudad"])){

                $consulta_ciudad_2="SELECT COUNT(CountryCode) AS Numero_Ciudades, District AS District FROM city GROUP BY District ";

                $datos_ciudad_2 = mysqli_query($conn, $consulta_ciudad_2);


                if($datos_ciudad_2->num_rows > 0){
                    foreach ($datos_ciudad_2 as $clave => $valor){
                        echo"<h3>".$valor['Numero_Ciudades']." => ".$valor['District']."</h3>";
                        //echo"<h3>".$valor['Continent']."</h3>";
                    } 
                }
            }

            if(isset($_GET["idioma"])){
                //Spanish y T van con comillas dobles
                //$consulta_pais_4="SELECT `Name`, `Region` FROM `country` INNER JOIN countrylanguage ON country.Code = countrylanguage.CountryCode WHERE Language = 'Spanish' AND IsOfficial = 'T' ORDER BY countrylanguage.Percentage LIMIT 10 ";
                $consulta_pais_4 = "SELECT `Name`,`Region`
                FROM `country`
                INNER JOIN countrylanguage ON country.`Code` = countrylanguage.`CountryCode` 
                WHERE Language='Spanish'  AND IsOfficial = 'T'
                ORDER BY `Percentage` DESC LIMIT 10 ";
                $datos_pais_4 = mysqli_query($conn, $consulta_pais_4);


                if($datos_pais_4->num_rows > 0){
                    foreach ($datos_pais_4 as $clave => $valor){
                        echo"<h3>".$valor['Name']."</h3>";
                    } 
                }
            }
        }*/
        if (isset($_GET["pais"]) && existePais($pais)) {
        
            header("Location: world.php");

        }
/*
        if (isset($_GET["poblacion"]) && ejercicio2($poblacion, $surfacearea, $lifeexpectancy, $continente_pais, $continente_ciudad, $idioma)) {
        
            header("Location: world.php");

        }

        if (isset($_GET["surfacearea"]) && ejercicio2($poblacion, $surfacearea, $lifeexpectancy, $continente_pais, $continente_ciudad, $idioma)) {
        
            header("Location: world.php");

        }

        if (isset($_GET["lifeexpectancy"]) && ejercicio2($poblacion, $surfacearea, $lifeexpectancy, $continente_pais, $continente_ciudad, $idioma)) {
        
            header("Location: world.php");

        }

        if (isset($_GET["continente_pais"]) && ejercicio2($poblacion, $surfacearea, $lifeexpectancy, $continente_pais, $continente_ciudad, $idioma)) {
        
            header("Location: world.php");

        }

        if (isset($_GET["continente_ciudad"]) && ejercicio2($poblacion, $surfacearea, $lifeexpectancy, $continente_pais, $continente_ciudad, $idioma)) {
        
            header("Location: world.php");

        }

        if (isset($_GET["idioma"]) && ejercicio2($poblacion, $surfacearea, $lifeexpectancy, $continente_pais, $continente_ciudad, $idioma)) {
        
            header("Location: world.php");

        }*/
    ?>

</body>
</html>