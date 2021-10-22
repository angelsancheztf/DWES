<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <?php
    //Crea la función esPrimo que reciba por parámetro un entero y devuelva un booleano indicando true si es primo o falso en caso contrario.
    //hacer que el usuario te diga el número

    $num = $_GET["introducir"];


    $i = $num;
        if (esPrimo($i)) {
            echo "<br>El número ".$i." es primo";
        } else {
            echo "<br>El número ".$i." NO es primo";
        }
    
    function esPrimo($num)
    {
        $cont=0;
        
        for($i=2; $i <= $num; $i++){
            if($num % $i == 0){
                if(++$cont > 1){
                    return false;
                }
            }   
        }
        return true;
    }


    ?>
</body>
</html>