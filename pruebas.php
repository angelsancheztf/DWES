<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <FORM action ="pruebas.php" METHOD="GET">
        Valor mínimo: <input type="text" name="minimo"></br>
        Valor máximo: <input type="text" name="maximo"></br>
        <input type="submit" value="OK" /></FORM>
    <?php
    /*
    $matriz = array (
        "Pos1" => array(" 1 ", " 2 ", " 3 "),
        "Pos2" => array(" 4 ", " 5 ", " 6 "),
        "Pos3" => array(" 7 ", " 8 ", " 9 ") 
      );
      print($matriz ["Pos1"][0]);
      print($matriz["Pos1"][1]);
      print($matriz["Pos1"][2]);  
      print("</br>");
      print($matriz["Pos2"][0]);
      print($matriz["Pos2"][1]);
      print($matriz["Pos2"][2]);
      print("</br>");
      print($matriz["Pos3"][0]);
      print($matriz["Pos3"][1]);
      print($matriz["Pos3"][2]);
      */
      
        
        $valorMinimo=$_GET["minimo"]; 
        $valorMaximo=$_GET["maximo"]; 
        minmax($valorMinimo, $valorMaximo); 
        function minmax($valorMin, $valorMax){
            while ( $valorMin <= $valorMax ) {
                echo $valorMin . "</br>";                                                
                $valorMin++;
            }         
        }


        $consulta_city="SELECT COUNT(*) FROM city WHERE CountryCode = '$CountryCode' ;";
            $datos_city = mysqli_query($conn, $consulta_city);
            $consulta_country="SELECT COUNT(*) FROM city WHERE Code = '$Code' ;";
            $datos_country = mysqli_query($conn, $consulta_country);
            $consulta_country_language="SELECT COUNT(*) FROM city WHERE CountryCode = '$CountryCode' ;";
            $datos_country_language = mysqli_query($conn, $consulta_country_language);
    ?>
</body>
</html>