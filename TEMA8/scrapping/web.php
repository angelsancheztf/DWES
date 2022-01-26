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
<?php
	// Incluimos el php simple_html_dom
	include_once('./simple_html_dom.php');

	$proxyurl = '88.198.50.103:8080';

	$context = stream_context_create();
	stream_context_set_params($context, array(
				'proxy' => $proxyurl,
				'ignore_errors' => true, 
				'max_redirects' => 3)
				);
	// De donde cogemos las noticias
	$html = file_get_html('https://www.elmundo.es', 0, $context);
	// Recogemos el link
	$articles_titles = $html->find(".ue-c-cover-content__link");

	echo "<b> Estas son las noticias: </b>";

	foreach($articles_titles as $article_title) {
		
		?>
			<ul>
				<li>
					<?php
						// Mostramos los titulos de las noticias
						echo $article_title->plaintext."<br>";
					?>
				</li>
			</ul>
			<?php
		
	}
	// Se recoge las noticias
	$html->clear();
	unset($html);
?>
</body>
</html>