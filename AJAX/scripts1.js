// Esta función es para poder recoger la ciudad del pais que elijamos, 
// la función está hecha con JQuery para poder recoger los datos.

function botonQuery() {
    // Creamos una nueva función.
    let req = new XMLHttpRequest();
    // Llamamos al name="pais"
    var pais = document.getElementById("pais");
    // Recogemos los datos y los mostramos
    req.open("GET", `getCities.php?pais=${pais.value}`, true);
    // Mostramos por pantalla los datos
    req.onreadystatechange = () => {
        if(req.readyState == 4){
            document.getElementById("respuesta").innerHTML = req.responseText;
        }
    }

    var data = new FormData();
    
    data.append('country', pais);

    req.send(data);
}

// Esta función es para poder recoger la ciudad del pais que elijamos, 
// la función está hecha con XMLHTTPREQUEST para poder recoger los datos.

function botonXML(){
    // Instanciamos el objeto
    if (window.XMLHttpRequest) {
        var http_request = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        var http_request = new ActiveXObject("Microsoft.XMLHTTP");
    }
    // Realizamos la petición a donde nosotros deseemos
    http_request.open(
        'GET',
        `getCities.php?pais=${pais.value}`,
        true
    );
    // Enviamos esa petición
    http_request.send();
    // Recogemos los datos mediante una url y los mostramos mediante el document.getElementById("respuesta2")
    $.ajax({
        type: "GET",
        url: `getCities.php?pais=${pais.value}`,
        data: {
            selectCountry: pais.value
        },
        success: function(response) {
            var element = document.getElementById("respuesta2");
            element.innerHTML = response;
        }
    });
}

function saveCity(){
    $.ajax({
        type: "GET",
        url: `getCities.php?pais=${pais.value}`,
        data: {
            selectCountry: pais.value
        },
        success: function(response) {
            var element = document.getElementById("respuesta2");
            element.innerHTML = response;
        }
    });
}

function deleteCity(){
    $.ajax({
        type: "GET",
        url: `getCities.php?pais=${pais.value}`,
        data: {
            selectCountry: pais.value
        },
        success: function(response) {
            var element = document.getElementById("respuesta2");
            element.innerHTML = response;
        }
    });
}
/*
function insertCity(){
    $.ajax({
        type: "GET",
        url: `getCities.php?pais=${pais.value}`,
        data: {
            selectCountry: pais.value
        },
        success: function(response) {
            var element = document.getElementById("respuesta2");
            element.innerHTML = response;
        }
    });
}
*/
function copyCity(country){
    $.ajax({
      type: "POST",
      url: "",
      data: {
        "country": country
      },
      success: function (response) {
        // console.log(country)
        alert("TABLA CREADA");
      }
    })
      
}