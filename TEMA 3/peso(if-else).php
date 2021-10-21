<html lang="es">
    <head>
        <title>Ejercicio IMC</title>
    </head>
    <body>
        <?php
        $peso = 100;
        $altura = 1.98;
        $masa_muscular_IMC = $peso/($altura**2);
        echo "Tu masa muscular(IMC) es $masa_muscular_IMC <br/>";

        if($masa_muscular_IMC < 18.5){
            echo "Situación: Bajo peso";
        }elseif($masa_muscular_IMC >= 18.5 && $masa_muscular_IMC <= 24.9){
            echo "Situación: Normal peso";
        }elseif($masa_muscular_IMC >= 25 && $masa_muscular_IMC <= 26.9){
            echo "Situación: Sobrepeso grado I";
        }elseif($masa_muscular_IMC >= 27 && $masa_muscular_IMC <= 29.9){
            echo "Situación: Sobrepeso grado II";
        }elseif($masa_muscular_IMC >= 30 && $masa_muscular_IMC <= 34.9){
            echo "Situación: Obesidad de tipo I";
        }elseif($masa_muscular_IMC >= 35 && $masa_muscular_IMC <= 39.9){
            echo "Situación: Obesidad de tipo II";
        }elseif($masa_muscular_IMC >= 40 && $masa_muscular_IMC <= 49.9){
            echo "Situación: Obesidad de tipo III (mórbida)";
        }elseif($masa_muscular_IMC >= 50){
            echo "Situación: Obesidad de tipo IV (extrema)";
        }

        ?>
    </body>
</html>