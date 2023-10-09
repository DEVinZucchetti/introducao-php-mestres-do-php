<?php
$peso = filter_var($_POST['peso'],FILTER_VALIDATE_FLOAT);
$altura = filter_var($_POST['altura'],FILTER_VALIDATE_FLOAT);

$imc =number_format($peso /($altura * $altura)) ;


if(!$peso || !$altura){
    echo "É obrigatório informar os dados";
    exit;
}else if($imc < 18.5) {
    echo "Abaixo do peso $imc "; 

}else if($imc <= 24.9) {
    echo "Peso ideal(Parabéns pela saúde) = $imc "; 

}else if($imc <= 29.9) {
    echo "Levemente acima do peso = $imc "; 
}else if($imc <= 34.9) {
    echo "Obesidade grau |  $imc "; 
}else if($imc <= 39.9) {
    echo "Obesidade grau ||  (Severa) = $imc "; 
}else if($imc < 40.0) {
    echo "Obesidade grau ||| (mórbida) = $imc "; 
}
?>