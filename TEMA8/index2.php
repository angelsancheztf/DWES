<?php
$tag = 'cat';
$url = 'https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key=726d7b5fbb3d4bb0651d01f4ffacbbba&tags='.$tags.'&format=json&nojsoncallback=1';

$data = json_decode(file_get_contents($url));


$photos = $data->photos->photo;

foreach($photos as $photo){
    echo'<h1>'. $photo->title .'</h1>';
}

?>