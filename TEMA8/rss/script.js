// Esta función es para mostrar las noticias
function mostrar(){
    $.ajax({
        method: "POST",
        url: 'noticias.php',
        data: {
            url: $('#RSS_url').val()
        },
        success: function(data){
            $('#noticias').html(data);
        }
    });    
}