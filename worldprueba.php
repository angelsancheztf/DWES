<?php

if(isset($_GET["pais"])){
    $pais = $_GET["pais"];

    $consulta_city="SELECT 'Name' FROM city WHERE CountryCode = '$pais' ;";

    $datos_city = mysqli_query($conn, $consulta_city);

    $consulta_country="SELECT'Name' FROM country WHERE Code = '$pais' ;";

    $datos_country = mysqli_query($conn, $consulta_country);

    $consulta_country_language="SELECT 'Name' FROM countrylanguage WHERE CountryCode = '$pais' ;";

    $datos_country_language = mysqli_query($conn, $consulta_country_language);

    if(mysqli_num_rows($datos_city) > 0){
        foreach ($datos_city as $clave => $valor){
            echo"<h2>".$valor['Name']."</h2>";
        }
    }

    echo "<h3>Ciudades ->".mysqli_num_rows($datos_city)."</h3>";

    if(mysqli_num_rows($datos_country) > 0){
        foreach ($datos_country as $clave => $valor){
            echo"<h2>".$valor['Name']."</h2>";
        }
    }

    echo "<h3>Ciudades ->".mysqli_num_rows($datos_country)."</h3>";

    if(mysqli_num_rows($datos_country_language) > 0){
        foreach ($datos_country_language as $clave => $valor){
            echo"<h2>".$valor['Name']."</h2>";
        }
    }

    echo "<h3>Lenguajes ->".mysqli_num_rows($datos_country_language)."</h3>";

}
?>