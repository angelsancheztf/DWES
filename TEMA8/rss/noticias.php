<?php
  if(isset($_POST['url'])){
    RSS($_POST['url'], 10);
  }

    function RSS($RSS_url){
        // Recogemos la/as noticia/as y las mandamos al POST
        $RSS_articulo = simplexml_load_string(file_get_contents($RSS_url));

        // Si algo falla, nos saltará este echo. Y para ver el error exacto el print_r
        if(!$RSS_articulo){
          echo "Error: el archivo xml";
          //print_r($RSS_articulo);
        }else {
          // De donde empezamos a coger la noticia
          $article = $RSS_articulo->channel;

          for($i = 0; $i < 10 ; $i++){
            // El número de noticias que recogemos como máximo
            $noticias = $article->item[$i];
            // El orden de la noticia
            echo "<div class='noticias'>";
            echo "<h2>" . $noticias->title . "</h2>";
            echo "<p>" . $noticias->description . "</p>";
            echo "<a href='" . $noticias->link . "'>Saber más de la noticia</a>";
            echo "</div>";
  
          }
        }
      }
?>