<?php 

$valor_1 = filter_var($_POST['valor_1'], FILTER_VALIDATE_INT);
$valor_2 = filter_var($_POST['valor_2'], FILTER_VALIDATE_INT);
$operacao = filter_var($_POST['operacao'], FILTER_VALIDATE_INT);


if(!$valor_1 || !$valor_2 || !$operacao){
    echo "Preencha com valores validos";
    exit;
    
}else{
    switch ($operacao) {
        case 1:{
            $resultado = $valor_1 * $valor_2;
            echo "O resultado da operacao e $resultado";
            break;
        }case 2:{
            $resultado = $valor_1 / $valor_2;
            echo "O resultado da operacao e $resultado";
            break;
        }
        case 3:{
            $resultado = $valor_1 + $valor_2;
            echo "O resultado da operacao e $resultado";
            break;
        }
        case 4:{
            $resultado = $valor_1 - $valor_2;
            echo "O resultado da operacao e $resultado";
            break;
        }
        default:{
            echo "Codigo de operacao invalido";
            break;
        }
}
}

?>