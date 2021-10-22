<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <?php
    //Crea la función esBisiesto que reciba por parámetro una fecha en formato “dd-mm-aaaa” y 
    //devuelva un booleano indicando true si el día es bisiesto o false en caso contrario.

    $anio = $_GET["introducir"];

    $i = ($anio = date('Y'));
        if (esBisiesto($i)) {
            echo "<br>La fecha ".$i." es bisiesto";
        } else {
            echo "<br>La fecha ".$i." NO es bisiesto";
        }
        function esBisiesto($anio) {
            
            if(($anio % 4 == 0) && (($anio % 100 != 0) || ($anio % 400 == 0))){
                 return true; // devolvemos true si es bisiesto
            }else{
                return false;
            }
               
        }

    ?>
</body>
</html>