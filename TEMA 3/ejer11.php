<html lang="es">
    <head>
        <title>Ejercicio 11</title>
    </head>
    <body>
        <?php
            //en un array de 10 valores numericos obten el valor maximo


            $numeros = array(3, 5, 8, 20, 50, 12, 2, 90, 67, 34);

            $maxNum = 0;

            foreach($numeros as $key){
                if($key>$maxNum) $maxNum=$key;
            }


            echo("El número más grande es: ");

            echo($maxNum);
            
        ?>
    </body>
</html>