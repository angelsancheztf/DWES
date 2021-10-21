<html lang="en">
<head>
    <title>Proyecto de pruebas</title>
</head>
<body>
    <?php
    /*****************/
    /* CONEXIÓN BASE DE DATOS */
    $servername = "localhost";
    $database = "medac";
    $username = "root";
    $password = "";

    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    /********************/

    //Check connection
    if(!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }
    echo "Conectado correctamente"."<br/>";

    /*************************/
    /*PREPARAMOS SENTENCIA SQL*/
    $consulta = "SELECT * FROM usuarios";
    /***********************/

    /***************************/
    /*SELECCIONAMOS BASE DE DATOS*/
    mysqli_select_db($conn,"medac");
    /*****************************/

    /*******************************/
    /*EJECUTAMOS CONSULTA A BD*/
    $datos = mysqli_query($conn,$consulta);
    /********************************/

    /**********************************/
    /*RECORREMOS ARRAY*/
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
    /*******************************/

    /*******************************/

    ?>
</body>
</html>