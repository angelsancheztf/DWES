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
/*
* Este if sirve para recoger el get y la variable del index. 
*/
if(isset($_GET["pais"])){
    $pais = $_GET["pais"];
}
        /*
        *Función para la conexión a la base de datos 
        */ 
        function existePais($pais){

            $servername = "localhost";
            $database = "world";
            $username = "root";
            $password = "";
                    
            $conn = mysqli_connect($servername, $username, $password, $database);
    
            if(!$conn) {
                die("Connection failed: ".mysqli_connect_error());
            }

            /*
            * Las consultas que hacemos para recoger los datos de la BBDD. 
            */

            $consulta_paises="SELECT `Name` FROM city WHERE CountryCode = '$pais' ;";
            
            $consulta_country="SELECT `Name` FROM country WHERE Code = '$pais' ;";
            
            $consulta_country_language="SELECT `Language` FROM countrylanguage WHERE CountryCode = '$pais' ;";

            mysqli_select_db($conn,"world");
            
            $datos_paises = mysqli_query($conn, $consulta_paises);
            $datos_country = mysqli_query($conn, $consulta_country);
            $datos_country_language = mysqli_query($conn, $consulta_country_language);
            
            /*
            * Este if sirve para, primero recoger el get y segundo hacemos el interior(lo que se nos pide en el ejercicio).
            * Lo comentado en el if es para visualizar como era el ejercicio antes de implementar la tabla.  
            */
            if(isset($_GET["pais"])){

                echo"<h1>PAIS</h1>";
                //echo "<h4>Pais =>".$datos_country->num_rows."</h4>";
                /*
                if($datos_country->num_rows > 0){
                    foreach ($datos_country as $clave => $valor){
                        echo"<h3>".$valor['Name']."</h3>";
                    } 
                } */

                if($datos_country->num_rows > 0){ ?>
                    <table border="2">
                        <tr>
                            <th>PAIS</th>
                            <th><?php echo "<h4>Pais =>".$datos_country->num_rows."</h4>"; ?></th>
                        </tr>
                        <?php foreach ($datos_country as $clave => $valor){ ?>
                        <tr>

                            <td> <?php echo $valor['Name']; ?> </td>
                              
                        </tr>
                        <?php } ?>
                    </table>
                <?php } ?>
    <?php

                echo"<h1>CIUDADES</h1>";
                //echo "<h4>Ciudades =>".$datos_paises->num_rows."</h4>";

                /*if($datos_paises->num_rows > 0){
                    foreach ($datos_paises as $clave => $valor){
                        echo"<h3>".$valor['Name']."</h3>";
                    } 
                } */ 

                if($datos_paises->num_rows > 0){ ?>
                    <table border="2">
                        <tr>
                            <th>CIUDADES</th>
                            <th><?php echo "<h4>Ciudades =>".$datos_paises->num_rows."</h4>"; ?></th>
                        </tr>
                        <?php foreach ($datos_paises as $clave => $valor){ ?>
                        <tr>

                            <td> <?php echo $valor['Name']; ?> </td>
                              
                        </tr>
                        <?php } ?>
                    </table>
                <?php } ?>
    <?php

                echo"<h1>LENGUAS</h1>";
                //echo "<h4>Lenguas =>".$datos_country_language->num_rows."</h4>";

                /*if($datos_country_language->num_rows > 0){
                    foreach ($datos_country_language as $clave => $valor){
                        echo"<h3>".$valor['Language']."</h3>";
                    } 
                }*/

                if($datos_country_language->num_rows > 0){ ?>
                    <table border="2">
                        <tr>
                            <th>LENGUAS</th>

                            <th><?php echo "<h4>Lenguas =>".$datos_country_language->num_rows."</h4>"; ?></th>
                        </tr>
                        <?php foreach ($datos_country_language as $clave => $valor){ ?>
                        <tr>

                            <td> <?php echo $valor['Language']; ?> </td>
                              
                        </tr>
                        <?php } ?>
                    </table>
                <?php } ?>
    <?php
            }
        }

        /*
        * Este if recoge el get y la funcion para poder mostrarlo por pantalla 
        */
        if (isset($_GET["pais"]) && existePais($pais)) {
        
            header("Location: world.php");

        }
    ?>
    <br>
    <!-- Este boton es para volver a la página de inicio -->
    <input type="button" onclick="location.href='index.php';" value="Volver a inicio" />
</body>
</html>