<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proyecto de pruebas</title>
</head>
<body>
    <?php
    $semanasiguiente = time() + (7 * 24 * 60 * 60);
                        //7 dias, 24 horas, 60 minutos, 60 segundos

    echo 'Ahora:        '. date('Y-m-d') ."<br/>";
    echo 'Semana Siguiente: '.date('Y-m-d', $semanasiguiente) ."<br/>";
    //o usar strotime():
    echo 'Semana Siguiente: '. date('Y-m-d', strtotime('+1 week')) ."<br/>";
    ?>
</body>
</html>