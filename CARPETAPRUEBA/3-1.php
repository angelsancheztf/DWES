<?php
    include '3.php';
    if(isset($_POST['metodo'])){
        switch ($_POST['metodo']){
            case 'RSS_ATOM':
                if(isset($_POST['url']) && isset($_POST['number_of_notices'])){
                    RSS($_POST['url'], $_POST['number_of_notices']);
                }
            break;

            default: 
                echo "ERROR";
            break;
        }
    }
?>