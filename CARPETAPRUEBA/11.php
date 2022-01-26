<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$articulos = simplexml_load_string(file_get_contents('https://www.marca.com/'));
$num_noticia=1;
$max_noticias=10;
echo "<h2>{$articulos->channel->title}</h2>";
foreach($articulos->channel->item as $noticia){ 
    $fecha = date("d/m/Y - H:i", strtotime($noticia->pubDate));?>
    <article>
        <h5><a href="<?php echo $noticia->link; ?>"><?php echo $noticia->title; ?></a></h5>
        <?php echo $fecha; ?>
        <?php echo $noticia->description; ?>
    </article>
    <?php $num_noticia++; 
    if($num_noticia > $max_noticias){
        break;
    }
}?>
</body>
</html>