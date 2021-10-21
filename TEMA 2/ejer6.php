<html lang="es">
    <head>
        <title>Ejercicio 5</title>
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

            $contenido = "74635498 B Rubén González Díaz <br/>";
            $array_tilde = array("Á", "É", "Í", "Ó", "Ú", "á", "é", "í", "ó", "ú");
            $array_sintilde = array("A", "E", "I", "O", "U", "a", "e", "i", "o", "u");
            echo str_replace(" ","", str_replace($array_tilde, $array_sintilde, $contenido));
            
            $array = array(2, 3, 45, 78, 25, 30, 25, 45, 67, 84, 39, 27, 19, 25, 38, 18, 26, 10, 20, 50);

            $total = array_sum($array);
            $media = $total / count($array);    
            echo "$media es la media. <br>";       

            $persona = array("Chris"=>"38","Dennis"=>"45","Sarah"=>"29","Karen"=>"47");
            echo "<table>";
                echo"<tr>";
                    echo"<th> PERSON </th>";
                    echo"<th> AGE </th>";
                echo"</tr>";
                foreach($persona as $person=>$años){
                    echo"<tr>";
                        echo "<td> $person </td>";
                        echo "<td> $años </td>";
                    echo"</tr>";
                }
            echo "</table>";
            
            $dinero = array("Destornillador"=> array("1", "4"),"Llave inglesa"=>array("2", "5"),"Martillo"=>array("1", "7"), "Total"=>array(" ", "20"));
            echo "<table>";
                echo "<tr>";
                    echo "<th> PRODUCTO </th>";
                    echo "<th> CANTIDAD </th>";
                    echo "<th> PRECIO </th>";
                echo"</tr>";
                foreach($dinero as $producto=>$cantidad){
                    echo"<tr>";
                        echo "<td> $producto </td>";
                        echo "<td> $cantidad[0] </td>";
                        echo "<td> $cantidad[1] </td>";
                    echo"</tr>";
                }
            echo "</table>";
        ?>

    </body>
</html>