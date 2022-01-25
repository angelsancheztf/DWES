<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="" method="">
        <select id="select" name="select">
            <option value="https://www.marca.com/">Marca.com</option>
            <option value="https://www.mundodeportivo.com/">MundoDeportivo.com</option>
        </select>
    </form>
    <button onclick="webScrapping();">Scrap!</button>
    <div id="respuesta_ajax"></div>
    <script>
        function webScrapping(){
            
            $.ajax({
                method: 'POST',
                url: '9_scrapping.php',
                data: {
                    select: document.getElementById('select').value,
                },
                success: function(respuesta){
                    $('#respuesta_ajax').html(respuesta);
                }
            });
        }
    </script>
</body>
</html>