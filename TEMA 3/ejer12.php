<html lang="es">
    <head>
        <title>Ejercicio 12</title>
    </head>
    <body>
        <?php
            //Obten el numero de valores iguales al valor 2 contenidos en un array de 
            //10 valores generados aleatoriamente con valores de 1 a 10.
            $conta = 0;
            for($i=0;$i<10;$i++){
                $elementos[$i]= rand(1,10);

                if($elementos[$i] == 2){
                    $conta++;
                }
                //si el $i == 2 {cont++;}
            }
            echo("El numero de 2 que aparece es ".$conta);
            //el numero de 2 que aparece es cont;

        ?>
    </body>
</html>