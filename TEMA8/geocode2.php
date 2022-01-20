<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #map{
            width: 500px;
            height: 500px;
        }
    </style>
</head>
<body>

    <div id="map"></div>
    <button onclick="initMap()">Hola</button>

    <script async defer 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApZEcGDIi-vyqEuhNmo9TAC0FeK02p7KM&callback=initMap">
    </script>
    <script src="main.js"></script>
    <script src="localizacion.js"></script>
</body>
</html>