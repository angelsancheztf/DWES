let map;

function initMap() {
  // Coordenadas
  const myLatLng = {lat: 34.043, lng: -118.267};

  var texto = '<h1> Nombre del lugar </h1>' + '<p> Descripcion del lugar</p>' +
              '<a href=https://www.google.com>Pagina web</a>';
  
  map = new google.maps.Map(document.getElementById("map"), {
    center: myLatLng,
    //{ lat: -34.397, lng: 150.644 }
    zoom: 8
  });

  const marcador = new google.maps.Marker({
    position: myLatLng,
    map: mapa,
    title: 'Primera ubicación'
  });
}