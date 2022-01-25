function getRss(){
    $.ajax({
        method: 'POST',
        url: '../CARPETAPRUEBA/3-1.php',
        data: {
            method: 'RSS_ATOM',
            url: $('#rss_url').val(),
            number_of_notices: $('#number_notices').val(),
        },
        success: function(data){
            $('#ajax_answer').html(data);
        }
    });
}