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
    $i = date('d-m-y');
        if (esBisiesto($i)) {
            echo "<br>La fecha ".$i." es bisiesto";
        } else {
            echo "<br>La fecha ".$i." NO es bisiesto";
        }
    /*
        function esBisiesto($year=NULL) {
            $year = ($year==NULL)? date('Y'):$year;
            return ( ($year%4 == 0 && $year%100 != 0) || $year%400 == 0 ); // devolvemos true si es bisiesto
        }
        */
        function esBisiesto($year=NULL AND $anio=date('Y')) {
            if(($anio % 4 == 0) && (($anio % 100 != 0) || ($anio % 400 == 0))){
                 return (($year==NULL)? date('Y'):$year); // devolvemos true si es bisiesto
            }else{
                echo "No es bisiesto";
            }
               
        }

    ?>
</body>
</html>