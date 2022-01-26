<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./mapa.css" />
    <script src="./mapa.js"></script>
  </head>
  <body>
    <h3>Localización del Estadio de Los Lakers (1)</h3>
    <h3>Localización del Camp Nou (2)</h3>
    <h3>Localización del Estadio Nuevo El Arcángel (3)</h3>
    <h3>Localización del Star Wars: Galaxy´s Edge (California) (4)</h3>
    <h3>Localización del The National September 11 Memorial Museum (5)</h3>
 
    <!--Mostramos el mapa-->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApZEcGDIi-vyqEuhNmo9TAC0FeK02p7KM&callback=initMap&v=weekly"

    >
  //AIzaSyApZEcGDIi-vyqEuhNmo9TAC0FeK02p7KM
  </script>
  </body>
</html>