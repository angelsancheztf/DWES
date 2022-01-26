<?php
	include_once('./simple_html_dom.php');

	if(isset($_POST['select'])){
		$select = $_POST["select"];
        //Es posible que cuando pruebes este proxy no este activo, en caso de ser asi, busca uno
        //que si lo este en cualquier pagina de proxies gratuitos en internet
	$proxyurl = '88.198.50.103:8080';

	$context = stream_context_create();
	stream_context_set_params($context, array(
				'proxy' => $proxyurl,
				'ignore_errors' => true, 
				'max_redirects' => 3)
				);

	$html = file_get_html($_POST["select"], 0, $context);

	$articles_titles = $html->find(".ue-c-cover-content__link");

	foreach($articles_titles as $article_title) {
		echo "\t\t".$article_title->plaintext."\n";
	}

	$html->clear();
	unset($html);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title>Document</title>
</head>
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
                url: 'web2.php',
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