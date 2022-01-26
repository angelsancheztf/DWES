<?php
if(isset($_POST['select'])){
    $select = $_POST["select"];
    
    $articulos = simplexml_load_string(file_get_contents($_POST["select"])); // https://devcode.la/ Convierte la información de la URL en cadena
    
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
    }

    echo $articulos;
}
?>

