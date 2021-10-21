<html lang="es">
    <head>
        <title>Ejercicio dados</title>
    </head>
    <body>
        <?php
            //Crea un array de las fechas obtenidas de la BD MySql y ordénalas de manera descendente

            $servername = "localhost";
            $database = "medac";
            $username = "root";
            $password = "";
        
            $conn = mysqli_connect($servername, $username, $password, $database);

            if(!$conn) {
                die("Connection failed: ".mysqli_connect_error());
            }
            echo "Conectado correctamente"."<br/>";

            $consulta = "SELECT * FROM usuarios";

            mysqli_select_db($conn,"medac");

            $datos = mysqli_query($conn,$consulta);
            
            foreach ($datos as $clave => $valor){
                $fecha_int = $valor["fecha_int"];
                $fecha_date = $valor["fecha_date"];
                $fecha_datetime = $valor["fecha_datetime"];
                $fecha_time = $valor["fecha_time"];
                $fecha_timestamp = $valor["fecha_timestamp"];

                echo $fecha_int.date("Y-m-d H:i:s") ."<br/>";
                echo $fecha_date.date("Y-m-d") ."<br/>";
                echo $fecha_datetime.date("Y-m-d") ."<br/>";
                echo $fecha_time.date("Y-m-d") ."<br/>";
                echo $fecha_timestamp.date("Y-m-d") ."<br/>";

            }
            
        ?>
    </body>
</html>