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
        function RSS($rss_url, $noticas_top){
            $article = simplexml_load_string(file_get_contents($rss_url));

            if(!$article){
                echo "Error";
            } else {
                $articules = $article->channel;

                for($i = 0; $i < $noticas_top; $i++){
                    $notice = $articules->item[$i];

                    echo "<article class='card m-2' style='width: 15rem'>";
                        echo "<div class='card-body'>";
                            echo "<h5>La noticia es {$notice->title}</h5>";
                            echo "<h5>Descripcion{$notice->description}</h5>";
                            echo "<h5>Link{$notice->link}</h5>";
                        echo "</div>";
                    echo "</article>";
                }
            }
        }
    ?>
</body>
</html>