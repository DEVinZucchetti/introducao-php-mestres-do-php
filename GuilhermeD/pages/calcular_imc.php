<?php 
    $peso = filter_var ($_POST['peso'], FILTER_VALIDATE_FLOAT);
    $altura = filter_var ($_POST['altura'], FILTER_VALIDATE_FLOAT);

    if(!$peso || !$altura){
        echo "O peso e altura são necessários";
    } else {
        $imc = $peso / ($altura * $altura);
        $imc = number_format($imc, 2);
    }
    if ($imc > 40){
        $imc_msg = "Obesidade 3";
    }
    if($imc >= 35 && $imc <= 39.9) {
        $imc_msg = "Obesidade 2";
    }
    if($imc >= 30 && $imc <= 34.9) {
        $imc_msg = "Obesidade 1";
    }
    if($imc >= 25 && $imc <= 29.9) {
        $imc_msg = "Levemente acima do peso";
    }
    if($imc >= 18.6 && $imc <= 24.9) {
        $imc_msg = "Peso ideal";
    }
    if($imc  <= 18.5) {
        $imc_msg = "Abaixo do peso";
    }
    echo $imc_msg;
?>