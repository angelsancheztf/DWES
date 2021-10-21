<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <form action ="ejer15.php" method="get">
        Introducir un numero: <input type="text" name="introducir"></br>
        <input type="submit" value="OK" /></br>
    </form>
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
        if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
            return True;
        } else {
            // comprobamos si es par
            if ($num % 2 != 0) {
                // comprobamos solo por los impares
                for ($i = 3; $i <= sqrt($num); $i += 2) {
                    if ($num % $i == 0) {
                        return False;
                    }
                }
                return True;
            }
        }
        return False;
    }


    ?>
</body>
</html>