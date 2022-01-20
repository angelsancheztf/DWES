<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="./1.css" />
    <script src="./1.js"></script>
  </head>
  <body>
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApZEcGDIi-vyqEuhNmo9TAC0FeK02p7KM&callback=initMap&v=weekly"
      async
    ></script>
  </body>
</html>