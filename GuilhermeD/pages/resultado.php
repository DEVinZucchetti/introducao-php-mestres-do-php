<?php 
    $numero = filter_input(INPUT_POST, 'valor', FILTER_VALIDATE_INT);
    
    if(!$numero){
        echo "Informe um número válido";
    } else {
        for($contador=1; $contador <= 10 ; $contador++){
            $resultado = $contador * $numero;
            echo "$numero * $contador = $resultado"."<br/>";
        }
    }

    echo "<hr />";

    if(!$numero){
        echo "Informe um número válido";
    } else {
        for($contador=1; $contador <= 10 ; $contador++){
            $resultado = $contador + $numero;
            echo "$numero + $contador = $resultado"."<br/>";
        }
    }

    echo "<hr />";

    if(!$numero){
        echo "Informe um número válido";
    } else {
        for($contador=1; $contador <= 10 ; $contador++){
            $resultado = $contador - $numero;
            echo "$numero - $contador = $resultado"."<br/>";
        }
    }

    echo "<hr />";

    if(!$numero){
        echo "Informe um número válido";
    } else {
        for($contador=1; $contador <= 10 ; $contador++){
            $resultado = $contador / $numero;
            echo "$numero / $contador = $resultado"."<br/>";
        }
    }

?>