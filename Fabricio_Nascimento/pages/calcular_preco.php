<?php 

$codigo = filter_input(INPUT_POST, 'codigo', FILTER_VALIDATE_INT);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);


if(!$codigo || !$quantidade){

    echo "Informações incorretas!";
    exit;
}else{
switch($codigo){
    case 100: {
        $valor = number_format($quantidade * 1.20, 2);
        echo "Voce pediu $quantidade refri(s) e que custa(m) $valor R$";
        break;
    }
    case 101: {
        $valor = number_format($quantidade * 1.30, 2);
        echo "Voce pediu $quantidade sanduiche(s) e que custa(m) $valor R$";
        break;
    }
    case 102: {
        $valor = number_format($quantidade * 1.50, 2);
        echo "Voce pediu $quantidade sopa(s) e que custa(m) $valor R$";
        break;
    }
    case 103: {
        $valor = number_format($quantidade * 1.20, 2);
        echo "Voce pediu $quantidade suco(s) e que custa(m) $valor R$";
        break;
    }
    case 104: {
        $valor = number_format($quantidade * 1.30, 2);
        echo "Voce pediu $quantidade salada(s) e que custa(m) $valor R$";
        break;
    }
    case 105: {
        $valor = number_format($quantidade * 1, 2);
        echo "Voce pediu $quantidade vitaminada(s) e que custa(m) $valor R$";
        break;
    }
    default:{
        echo "Código nao cadastrado em breve estaremos cadastrando mais produtos";
    }


}
}
?>