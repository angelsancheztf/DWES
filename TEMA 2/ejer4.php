<html lang="es">
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php
        $varTexto = "Hola";
        $varEntero = 1234;
        $varBoolean = true;
        $varFloat = 1.5;
        $varArray = array(1,2);

        echo "<b>No conversión:</b> <br/>";
        if(is_string($varTexto)){
            echo"El $varTexto es String <br/>";
        }else{
            echo"El $varTexto no es String <br/>";
        }
        
        if(is_string($varEntero)){
            echo"El $varEntero es String <br/>";
        }else{
            echo"El $varEntero no es String <br/>";
        }

        if(is_string($varBoolean)){
            echo"El $varBoolean es String <br/>";
        }else{
            echo"El $varBoolean no es String <br/>";
        }

        if(is_string($varFloat)){
            echo"El $varFloat es String <br/>";
        }else{
            echo"El $varFloat no es String <br/>";
        }

        if(is_string($varArray[0])){
            echo'El $varArray[0] => 1 es String <br/>';
        }else{
            echo'El $varArray[0] => 1 no es String <br/>';
        }

        if(is_string($varArray[1])){
            echo'El $varArray[1] => 2 es String <br/>';
        }else{
            echo'El $varArray[1] => 2 no es String <br/>';
        }

        echo "--------------------------------------------------------- <br/>";
        echo "<b>Conversión:</b> <br/>";

        if(strval($varTexto)){
            echo"El $varTexto es String <br/>";
        }else{
            echo"El $varTexto no es String <br/>";
        }

        if(strval($varEntero)){
            echo"El $varEntero es String <br/>";
        }else{
            echo"El $varEntero no es String <br/>";
        }

        if(strval($varBoolean)){
            echo"El $varBoolean es String <br/>";
        }else{
            echo"El $varBoolean no es String <br/>";
        }

        if(strval($varFloat)){
            echo"El $varFloat es String <br/>";
        }else{
            echo"El $varFloat no es String <br/>";
        }

        if(strval($varArray[0])){
            echo'El $varArray[0] => 1 es String <br/>';
        }else{
            echo'El $varArray[0] => 1 no es String <br/>';
        }

        if(strval($varArray[1])){
            echo'El $varArray[1] => 2 es String <br/>';
        }else{
            echo'El $varArray[1] => 2 no es String <br/>';
        }
        ?>
    </body>
</html>