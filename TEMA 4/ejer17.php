<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    <?php
    //Crea la función fibonacci que reciba por parámetro la cantidad de elementos que se desea obtener de 
    //la serie Fibonacci (si no se especifica nada por defecto obtendrá los 10 primeros), y 
    //devuelva un array con dicha sucesión de números.

    //FALTA ARRAY

    $introducir = $_GET["introducir"];
    //fibonacci($introducir);

    function fibonacci($introducir){
        
        $fibonacci = [0, 1];

        for($i=2;$i<=$introducir;$i++)
        {
            $fibonacci[] = $fibonacci[$i-1]+$fibonacci[$i-2];
        }
        return array($fibonacci);
    }
    
    
    //$final = "El numero es ". fibonacci($introducir);
    
    print_r($final);
    
    ?>
</body>
</html>