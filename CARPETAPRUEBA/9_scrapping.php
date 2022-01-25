<?php
if(isset($_POST['select'])){
    $select = $_POST["select"];
    
    $html = file_get_contents($_POST["select"]); // https://devcode.la/ Convierte la información de la URL en cadena
    
    echo $html;
}
?>