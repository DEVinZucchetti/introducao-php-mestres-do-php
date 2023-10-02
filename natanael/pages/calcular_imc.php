<?php
$peso = filter_var($_POST['peso'], FILTER_VALIDATE_FLOAT);
$altura = filter_var($_POST['altura'], FILTER_VALIDATE_FLOAT);
$imc = $peso / ($altura * $altura);
if (!$peso || !$altura) {
   echo "peso e altura sao obrigatorios";
   exit;
} else {

   echo "o seu imc é: " . number_format($imc, 2);
}
