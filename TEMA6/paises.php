<!-- <table border="2">  
        <tbody>
            <tr>
            <?php foreach ($datos_pais_3 as $clave => $valor){ ?>
            <td> <?php echo $valor['Numero_Paises']; ?> </td>
            <td> <?php echo "=>" ?> </td> 
            <td> <?php echo $valor['Continent']; ?> </td> 
            </tr>
            <?php } ?>
        </tbody>
    </table>
            -->

-------------------------------------------------------------------------------------------------------------
            <?php
                if($datos->num_rows > 0){
                    foreach ($datos as $clave => $valor){
                        echo"<option value='".$valor['Code']."'>".$valor['Name']."</option>";
                    }
                }
            ?>

--------------------------------------------------------------------------------------------------------------

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
-----------------------------------------------------------------------------------------------------------------------------------------

<?php
/*
* Este if sirve para recoger el get y la variable del index. 
*/

        $servername = "localhost";
        $database = "world";
        $username = "root";
        $password = "";
                    
        $conn = mysqli_connect($servername, $username, $password, $database);
    
        if(!$conn) {
            die("Connection failed: ".mysqli_connect_error());
        }
            

        mysqli_select_db($conn,"world");

        if(isset($_GET["button"])){
            $button = $_GET["button"];
        }
        /*
        * Este switch-case sirve para, primero recoger el get y segundo hacemos el interior(lo que se nos pide en el ejercicio).
        * Lo comentado en el switch-case es para visualizar como era el ejercicio antes de implementar la tabla.  
        */

        switch($button){

            /* 
            * Boton para obtener las 10 CIUDADES con más población del mundo.
            */
            
            case "10 CIUDADES con más población del mundo":

            if($button){

               $consulta_ciudad="SELECT `Name` FROM `city` ORDER BY Population DESC LIMIT 10 ";

               $datos_ciudad = mysqli_query($conn, $consulta_ciudad);


               /*if($datos_ciudad->num_rows > 0){
                   foreach ($datos_ciudad as $clave => $valor){
                       echo"<h3>".$valor['Name']."</h3>";
                   } 
               }
               */
               if($datos_ciudad->num_rows > 0){ ?>
                <table border="2">
                    <tr>
                        <th>Ciudades</th>
                        
		            </tr>
                    <?php foreach ($datos_ciudad as $clave => $valor){ ?>
                    <tr>
                        <td> <?php echo $valor['Name']; ?> </td>
                          
                    </tr>
                    <?php } ?>
                </table>
            <?php } ?>
<?php
           }
           
           break;

            /* 
            * Boton para obtener los 10 PAÍSES con mayor tamaño de área demográfica del mundo.
            */

           case "10 PAÍSES con mayor tamaño de área demográfica del mundo":

           if(isset($_GET["button"])){

               $consulta_pais="SELECT `Name`, `Region` FROM `country` ORDER BY SurfaceArea DESC LIMIT 10 ";

               $datos_pais = mysqli_query($conn, $consulta_pais);


               /*if($datos_pais->num_rows > 0){
                   foreach ($datos_pais as $clave => $valor){
                       echo"<h3>".$valor['Name']."</h3>";
                   } 
               }
               */
               if($datos_pais->num_rows > 0){ ?>
                <table border="2">
                    <tr>
                        <th>Paises</th>
                        
		            </tr>
                    <?php foreach ($datos_pais as $clave => $valor){ ?>
                    <tr>
                        <td> <?php echo $valor['Name']; ?> </td>
                          
                    </tr>
                    <?php } ?>
                </table>
            <?php } ?>
<?php
           }

           break;

            /* 
            * Boton para obtener los 10 PAÍSES con menor esperanza de vida.
            */

           case "10 PAÍSES con menor esperanza de vida":

           if(isset($_GET["button"])){

               $consulta_pais_2="SELECT * FROM `country` WHERE LifeExpectancy IS NOT NULL ORDER BY LifeExpectancy ASC LIMIT 10 ";

               $datos_pais_2 = mysqli_query($conn, $consulta_pais_2);

            /*
               if($datos_pais_2->num_rows > 0){
                   foreach ($datos_pais_2 as $clave => $valor){
                       echo"<h3>".$valor['Name']."</h3>";
                   } 
               }
               */
               if($datos_pais_2->num_rows > 0){ ?>
                <table border="2">
                    <tr>
                        <th>Paises</th>
                        
		            </tr>
                    <?php foreach ($datos_pais_2 as $clave => $valor){ ?>
                    <tr>
                        <td> <?php echo $valor['Name']; ?> </td>
                          
                    </tr>
                    <?php } ?>
                </table>
            <?php } ?>
<?php
           }

           break;

           /* 
            * Boton para obtener el número de PAÍSES por cada continente.
            */

           case "Número de PAÍSES por cada continente":

           if(isset($_GET["button"])){

               $consulta_pais_3="SELECT COUNT(country.Code) AS Numero_Paises, country.continent AS Continent FROM country GROUP BY country.continent ";

               $datos_pais_3 = mysqli_query($conn, $consulta_pais_3);


               /*if($datos_pais_3->num_rows > 0){
                   foreach ($datos_pais_3 as $clave => $valor){
                       echo"<h3>".$valor['Numero_Paises']." => ".$valor['Continent']."</h3>";
                       //echo"<h3>".$valor['Continent']."</h3>";
                   } 
               }*/
               if($datos_pais_3->num_rows > 0){ ?>
                <table border="2">
                    <tr>
                        <th>Paises</th>
                        
                        <th>Continentes</th>
		            </tr>
                    <?php foreach ($datos_pais_3 as $clave => $valor){ ?>
                    <tr>
                        <td> <?php echo $valor['Numero_Paises']; ?> </td>
                         
                        <td> <?php echo $valor['Continent']; ?> </td> 
                    </tr>
                    <?php } ?>
                </table>
            <?php } ?>
<?php
           }

           break;

           /* 
            * Boton para obtener el número de CIUDADES por cada continente.
            */

           case "Número de CIUDADES por cada continente":
           
           if(isset($_GET["button"])){

               $consulta_ciudad_2="SELECT COUNT(*) AS 'Numero_Ciudades', country.Continent FROM city INNER JOIN country ON country.Code = city.CountryCode GROUP BY Continent ";

               $datos_ciudad_2 = mysqli_query($conn, $consulta_ciudad_2);


               /*if($datos_ciudad_2->num_rows > 0){
                   foreach ($datos_ciudad_2 as $clave => $valor){
                       echo"<h3>".$valor['Numero_Ciudades']." => ".$valor['Continent']."</h3>";
                       //echo"<h3>".$valor['Continent']."</h3>";
                   } 
               }*/

               if($datos_ciudad_2->num_rows > 0){ ?>
                <table border="2">
                    <tr>
                        <th>Ciudades</th>
                        
                        <th>Continentes</th>
		            </tr>
                    <?php foreach ($datos_ciudad_2 as $clave => $valor){ ?>
                    <tr>
                        <td> <?php echo $valor['Numero_Ciudades']; ?> </td>
                         
                        <td> <?php echo $valor['Continent']; ?> </td> 
                    </tr>
                    <?php } ?>
                </table>
            <?php } ?>
<?php
           }

           break;

           /* 
            * Boton para obtener los 10 PAÍSES donde el idioma español sea el que más se hable y sea idioma oficial.
            */

           case "10 PAÍSES donde el idioma español sea el que más se hable y sea idioma oficial":

           if(isset($_GET["button"])){
               //Spanish y T van con comillas dobles
               //$consulta_pais_4="SELECT `Name`, `Region` FROM `country` INNER JOIN countrylanguage ON country.Code = countrylanguage.CountryCode WHERE Language = 'Spanish' AND IsOfficial = 'T' ORDER BY countrylanguage.Percentage LIMIT 10 ";
               $consulta_pais_4 = "SELECT `Name`,`Region`
               FROM `country`
               INNER JOIN countrylanguage ON country.`Code` = countrylanguage.`CountryCode` 
               WHERE Language='Spanish'  AND IsOfficial = 'T'
               ORDER BY `Percentage` DESC LIMIT 10 ";
               $datos_pais_4 = mysqli_query($conn, $consulta_pais_4);


               /*if($datos_pais_4->num_rows > 0){
                   foreach ($datos_pais_4 as $clave => $valor){
                       echo"<h3>".$valor['Name']."</h3>";
                   } 
               }*/
               if($datos_pais_4->num_rows > 0){ ?>
                <table border="2">
                    <tr>
                        <th>Paises</th>
                        
		            </tr>
                    <?php foreach ($datos_pais_4 as $clave => $valor){ ?>
                    <tr>
                        <td> <?php echo $valor['Name']; ?> </td>
                          
                    </tr>
                    <?php } ?>
                </table>
            <?php } ?>
<?php
           }

           break;
        }

        if (isset($_GET["button"])) {
        
            header("Location: world.php");

        }
    ?>
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

