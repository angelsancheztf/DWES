<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <br><br>
        <input type="Insetar" placeholder="Insetar ciudad nueva">

        <button value="" type="guardar" id="guardar">Guardar</button>
        <?php
        if(isset($_GET["guardar"])){
            $guardar = $_GET["guardar"];
        }
            if($guardar){
                 echo $valor['INSERT INTO city(CountryCode, Name) VALUES () ']; 
            } else {
                echo ("Negativo, no se ha guardado");
            }
        ?>
</body>
</html>