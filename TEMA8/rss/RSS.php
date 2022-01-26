<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <br><br>
    <!--Aquí hacemos la busqueda-->
    <input type="text" id="RSS_url" placeholder="Introduce la URL">
    <!--Le damos a confirmar a la busqueda-->
    <button onclick = "mostrar()">Buscar</button>
    <!--Nos muestra la busqueda-->
    <div id="resultados">
        <h2>Estan son las noticias de tu busqueda:</h2>
        <div id="noticias">
        </div>
    </div>
    <!--Accedemos a script.js-->
    <script src="./script.js"></script>
</body>
</html>