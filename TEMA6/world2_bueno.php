<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>world2.php</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $database = "world";
        $username = "root";
        $password = "";
                    
        $conn = mysqli_connect($servername, $username, $password, $database);
    
        if(!$conn) {
            die("Connection failed: ".mysqli_connect_error());
        }
            

        mysqli_select_db($conn,"world");

        switch($_GET["button"]){
            case "10 CIUDADES con más población del mundo":

            if(isset($_GET["button"])){

               $consulta_ciudad="SELECT `Name` FROM `city` ORDER BY Population DESC LIMIT 10 ";

               $datos_ciudad = mysqli_query($conn, $consulta_ciudad);


               if($datos_ciudad->num_rows > 0){
                   foreach ($datos_ciudad as $clave => $valor){
                       echo"<h3>".$valor['Name']."</h3>";
                   } 
               }
           }
           
           break;

           case "10 PAÍSES con mayor tamaño de área demográfica del mundo":

           if(isset($_GET["button"])){

               $consulta_pais="SELECT `Name`, `Region` FROM `country` ORDER BY SurfaceArea DESC LIMIT 10 ";

               $datos_pais = mysqli_query($conn, $consulta_pais);


               if($datos_pais->num_rows > 0){
                   foreach ($datos_pais as $clave => $valor){
                       echo"<h3>".$valor['Name']."</h3>";
                   } 
               }
           }

           break;

           case "10 PAÍSES con menor esperanza de vida":

           if(isset($_GET["button"])){

               $consulta_pais_2="SELECT * FROM `country` WHERE LifeExpectancy IS NOT NULL ORDER BY LifeExpectancy ASC LIMIT 10 ";

               $datos_pais_2 = mysqli_query($conn, $consulta_pais_2);


               if($datos_pais_2->num_rows > 0){
                   foreach ($datos_pais_2 as $clave => $valor){
                       echo"<h3>".$valor['Name']."</h3>";
                   } 
               }
           }

           break;
           
           case "Número de PAÍSES por cada continente":

           if(isset($_GET["button"])){

               $consulta_pais_3="SELECT COUNT(country.Code) AS Numero_Paises, country.continent AS Continent FROM country GROUP BY country.continent ";

               $datos_pais_3 = mysqli_query($conn, $consulta_pais_3);


               if($datos_pais_3->num_rows > 0){
                   foreach ($datos_pais_3 as $clave => $valor){
                       echo"<h3>".$valor['Numero_Paises']." => ".$valor['Continent']."</h3>";
                       //echo"<h3>".$valor['Continent']."</h3>";
                   } 
               }
           }

           break;

           case "Número de CIUDADES por cada continente":
           
           if(isset($_GET["button"])){

               $consulta_ciudad_2="SELECT COUNT(*) AS 'Numero_Ciudades', country.Continent FROM city INNER JOIN country ON country.Code = city.CountryCode GROUP BY Continent ";

               $datos_ciudad_2 = mysqli_query($conn, $consulta_ciudad_2);


               if($datos_ciudad_2->num_rows > 0){
                   foreach ($datos_ciudad_2 as $clave => $valor){
                       echo"<h3>".$valor['Numero_Ciudades']." => ".$valor['Continent']."</h3>";
                       //echo"<h3>".$valor['Continent']."</h3>";
                   } 
               }
           }

           break;

           case "10 PAÍSES donde el idioma español sea el que más se hable y sea idioma oficial":

           if(isset($_GET["button"])){
               //Spanish y T van con comillas dobles
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

           break;

        default:
        }
    ?>
    <input type="button" onclick="location.href='index.php';" value="Volver a inicio" />
</body>
</html>