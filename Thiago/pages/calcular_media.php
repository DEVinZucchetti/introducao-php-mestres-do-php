<?php
    $notaUm = filter_var($_POST['numberOne'], FILTER_VALIDATE_FLOAT);
    $notaDois = filter_var($_POST['numberTwo'], FILTER_VALIDATE_FLOAT);
    $notaTres = filter_var($_POST['numberThree'], FILTER_VALIDATE_FLOAT);
    $notaQuatro = filter_var($_POST['numberFour'], FILTER_VALIDATE_FLOAT);

    if(!$notaUm || !$notaDois || !$notaTres || !$notaQuatro) {
        echo "Todas as notas devem ser preenchidas";
        exit;
    } else {
        $media = ($notaUm + $notaDois + $notaTres + $notaQuatro) / 4;
        echo "A média das suas nota é ".number_format($media, 2);
    }
?>