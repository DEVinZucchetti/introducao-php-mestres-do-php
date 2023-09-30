<?php 
    $codigo = filter_input(INPUT_POST, 'codigo', FILTER_VALIDATE_INT);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);

    if(!$codigo || !$quantidade){
        echo "Informações incorretas";
        exit;
    } else{
        
        switch($codigo){
            case 3456: {
                $valor = $quantidade * 6;
                echo "Você pediu $quantidade Coxinha e vai pagar $valor";
                break;
            }
            case 3457: {
                $valor = $quantidade * 1;
                echo "Você pediu $quantidade Sushis e vai pagar $valor";
            }
            case 3458: {
                $valor = $quantidade * 8.99;
                echo "Você pediu $quantidade pasteis e vai pagar $valor";
            }
            default: {
                echo "Código não localizado";
            }
        }
    }

?>