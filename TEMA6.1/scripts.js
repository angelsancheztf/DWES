function botonQuery() {
    let req = new XMLHttpRequest();
    var pais = document.getElementById("pais").value;
    console.log(pais);

    req.open("GET", 'http://localhost/dwes21/TEMA6.1/getCities.php?pais=ESP', true);
    req.onreadystatechange = () => {
        if(req.readyState == 4){
            document.getElementById("jquery").innerHTML = req.responseText;
        }
    }
    var data = new FormData();
    data.append('country', pais);

    req.send(data);
}

function botonXML(){
    if (window.XMLHttpRequest) {
        var http_request = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        var http_request = new ActiveXObject("Microsoft.XMLHTTP");
    }

    http_request.open(
        'GET',
        'http://localhost/dwes21/TEMA6.1/getCities.php?pais=ABW',
        true
    );

    http_request.send();

    if (http_request.readyState == 4 && http_request.status == 200) {
        alert("todo va bien");
    } else {
        alert("algo falla");
    }


    $.ajax({
        type: "GET",
        url: 'getCities.php',
        data: {
            selectCountry: country.value
        },
        success: function(response) {
            var element = document.getElementById("xml");
            element.innerHTML = response;
        }
    });
}