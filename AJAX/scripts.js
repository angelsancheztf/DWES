// mostrar las ciudades
function show() {
  var country = $("#country").val();
  $.ajax({
    type: "POST",
    url: "mostrar.php",
    data: { country: country },

    success: function (response) {
      $("#resultado").html(response);
    },
  });
}

// guardar las ciudades
function saveCity(name, newName) {
  $.ajax({
    type: "POST",
    url: "consultas.php",
    data: {
      tabla: "1",
      name: name,
      newName: newName,
    },
    success: function (response) {
      alert("Actualización con exito");
    },
  });
}

// eliminar las ciudades
function deleteCity(name) {
  $.ajax({
    type: "POST",
    url: "consultas.php",
    data: {
      tabla: "2",
      name: name,
    },
    success: function (response) {
      alert("Borrado con exito");
      show();
    },
  });
}

// guardar nueva ciudad
function save(name, code) {
  $.ajax({
    type: "POST",
    url: "consultas.php",
    data: {
      tabla: "3",
      name: name,
      code: code,
    },
    success: function (response) {
      alert("Creación con exito");
      show();
    },
  });
}

// copiar las ciudades a una nueva bbdd
function copyCity(country) {
  $.ajax({
    type: "POST",
    url: "consultas.php",
    data: {
      tabla: "4",
      country: country,
    },
    success: function (response) {
      alert("Tabla nueva creada con exito");
    },
  });
}
