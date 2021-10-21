<html lang="es">
    <head>
        <title>Ejercicio dados</title>
    </head>
    <body>
        <?php
            $dado1 = rand(1,6);
            $dado2 = rand(1,6);
            $dado3 = rand(1,6);

            if($dado1 == 6 && $dado2 == 6 && $dado3 == 6){
                echo ("Excelente");
            }elseif($dado1 && $dado2 == 6 || $dado1 && $dado3 == 6 || $dado2 && $dado3 == 6){
                echo ("Muy bien");
            }elseif($dado1 == 6 || $dado2 == 6 || $dado3 == 6){
                echo ("Regular");
            }else{
                echo ("Pésimo");
            }
        ?>
    </body>
</html>