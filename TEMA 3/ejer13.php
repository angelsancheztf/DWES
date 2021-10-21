
        <?php
            //Crea una matriz de 10 x 10, y calcula la suma de la diagonal principal y
            //la suma de la diagonal secundaria y muestre por pantalla la diferencia de ámbas.

            $matrizp = 0;
            $matrizs = 0;
                
                for($i=0; $i<10; $i++) {

                    for($j=0; $j<10; $j++){
                        $matriz[$i][$j]=rand(0,9);

                        if($i==$j){
                            $matrizp += $matriz[$i][$j];
                            //averigua suma principal
                        }
                    
                        if(($i+$j) == ($matriz[$i][$j])-1){
                           $matrizs += $matriz[$i][$j];
                            //averigua secundaria

                        }
                    }
                }
            
            for($i=0; $i<10; $i++){
                for($j=0; $j<10; $j++){
                    echo($matriz[$i][$j]."\t");
                }
                echo("<br/>");
            }
            
            
            echo("<br/>");
            echo("La suma de diagonal principal es ".$matrizp."<br/>");
            echo("La suma de diagonal secundaria es ".$matrizs."<br/>");
            echo("La diferencia es ".$matrizp - $matrizs );        
        ?>
