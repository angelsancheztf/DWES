<html lang="es">
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <?php
            echo "Cadena con tildes: <br/>";
            $contenidoVariable = "Álvaro ha estudiado Ingeniería electrónica en la Universidad de Córdoba <br/>";
            echo $contenidoVariable;
            
            echo "Cadena sin tildes: <br/>";
            $array_tilde = array("Á", "É", "Í", "Ó", "Ú", "á", "é", "í", "ó", "ú");
            $array_sintilde = array("A", "E", "I", "O", "U", "a", "e", "i", "o", "u");
            echo str_replace($array_tilde, $array_sintilde, $contenidoVariable);

            echo "Tiene ";
            echo strlen($contenidoVariable);
            echo " caracteres. <br/>";

            echo strtoupper(str_replace($array_tilde, $array_sintilde, $contenidoVariable));

            $contenido = "74635498 B Rubén González Díaz <br/>";
            $array_tilde = array("Á", "É", "Í", "Ó", "Ú", "á", "é", "í", "ó", "ú");
            $array_sintilde = array("A", "E", "I", "O", "U", "a", "e", "i", "o", "u");
            echo str_replace(" ","", str_replace($array_tilde, $array_sintilde, $contenido));
            
            
        ?>
    </body>
</html>