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
function feed($feedURL){
$i = 0; 
$url = $feedURL; 
$rss = simplexml_load_file($url); 
    foreach($rss->channel->item as $item) { 
    $link = $item->link;  //extrae el link
    $title = $item->title;  //extrae el titulo
    $date = $item->pubDate;  //extrae la fecha
	$guid = $item->guid;  //extrae el link de la imagen
    $description = strip_tags($item->description);  //extrae la descripcion
    if (strlen($description) > 400) { //limita la descripcion a 400 caracteres
    $stringCut = substr($description, 0, 200);                   
    $description = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';}
    if ($i < 16) { // extrae solo 16 items
     echo '<div class="cuadros1"><h4><a href="'.$link.'" target="_blank">'.$title.'</a></h4><br><img src="'.$guid.'"><br>'.$description.'<br><div class="time">'.$date.'</div></div>';}
     $i++;}
	echo '<div style="clear: both;"></div>';}
?>	
<?php feed("http://norfipc.com/rss.xml") ?>
</body>
</html>