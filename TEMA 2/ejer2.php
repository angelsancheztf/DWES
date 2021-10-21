<html lang="es">
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
        $varTexto = "Hola";
        $varEntero = 1234;
        $varBoolean = true;
        $varFloat = 1.5;
        $varArray = array("1","2");

        echo "Variable de tipo de cadena de texto: ". $varTexto."<br/>";
        echo "Variable de tipo entero: ". $varEntero."<br/>";
        echo "Variable de tipo boolean: ". $varBoolean."<br/>";
        echo "Variable de tipo float: ". $varFloat."<br/>";
        echo "Variable de tipo compuesto: ";
        print_r($varArray);
        
        ?>
    </body>
</html>