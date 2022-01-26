// Visualización de las coordenadas con marcador simple
/*function initMap() {
  // Coordenadas
  const myLatLng = { lat: 34.043, lng: -118.267 };

  var texto = '<h1> Estadio de Los Lakers </h1>' + '<p> Stadium Los Lakers</p>' +
    '<a href=https://www.google.com/search?q=STAPLES+Center&stick=H4sIAAAAAAAAAONgVuLUz9U3MMrONi1-xGjCLfDyxz1hKe1Ja05eY1Tl4grOyC93zSvJLKkUEudig7J4pbi5ELp4FrHyBYc4Bvi4Bis4p-aVpBYBAPr_SJJVAAAA&sa=X&ved=2ahUKEwiGhZOTo9D1AhUOnxQKHam2AS8QzIcDKAB6BAgJEAE>Pagina web</a>';


  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 6,
    center: myLatLng,
  });

  new google.maps.Marker({
    position: myLatLng,
    map,
    title: "Estadio de Los Lakers",
  });

  var informacion = new google.maps.InfoWindow({
    content: texto
  });

  marcador.addListener('click', function(){
    informacion.open(mapa, marcador);
  });
}
*/

// Visualización de las coordenadas con marcador múltiple
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 2,
    center: { lat: 0, lng: 0 },
  });
  // Set LatLng and title text for the markers. The first marker (Boynton Pass)
  // receives the initial focus when tab is pressed. Use arrow keys to
  // move between markers; press tab again to cycle through the map controls.
  const tourStops = [
    [{ lat: 34.043, lng: -118.267 }, "Stadium Los Lakers"],
    [{ lat: 41.381, lng: 2.122 }, "Camp Nou"],
    [{ lat: 37.872, lng: -4.764 }, "Stadium Nuevo El Arcángel"],
    [{ lat: 33.814, lng: -117.921 }, "Star Wars: Galaxy´s Edge (California)"],
    [{ lat: 40.7115, lng: -74.0125 }, "The National September 11 Memorial Museum"], 
  ];
  // Create an info window to share between markers.
  const infoWindow = new google.maps.InfoWindow();

  // Create the markers.
  tourStops.forEach(([position, title], i) => {
    const marker = new google.maps.Marker({
      position,
      map,
      title: `${i + 1}. ${title}`,
      label: `${i + 1}`,
      optimized: false,
    });

    // Add a click listener for each marker, and set up the info window.
    marker.addListener("click", () => {
      infoWindow.close();
      infoWindow.setContent(marker.getTitle());
      infoWindow.open(marker.getMap(), marker);
    });
  });
}