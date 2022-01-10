<?php if($datos_paises->num_rows > 0){ ?>
        <table border="2">
            <tr>
                <th>CIUDADES</th>
                <th><?php echo "<h4>Ciudades =>".$datos_paises->num_rows."</h4>"; ?></th>
            </tr>
            <?php foreach ($datos_paises as $clave => $valor){ ?>
            <tr>

                <td> <?php echo $valor['Name']; ?> </td>
                              
            </tr>
            <?php } ?>
        </table>
<?php } ?>
