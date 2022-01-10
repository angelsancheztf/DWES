$.ajax({
    type: "POST",
    url: 'world.php',
    data: { selectCountry : country.value },
    success: function(response)
    {
        var element = document.getElementById("tableCities");
        element.innerHTML = response;
    }
});
