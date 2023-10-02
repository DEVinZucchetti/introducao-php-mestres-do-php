<?php
$num1 = filter_var($_POST['num1'], FILTER_VALIDATE_FLOAT);
$num2 = filter_var($_POST['num2'], FILTER_VALIDATE_FLOAT);

$soma = $num1 + $num2;
$subtracao = $num1 - $num2;
$multiplicacao = $num1 * $num2;
$divisao = $num1 / $num2;

if (!$num1 || !$num2) {
   echo "digite os numeros";
   exit;
} else {
   echo "$num1 + $num2 = $soma || ";
   echo "$num1 - $num2 = $subtracao || ";
   echo "$num1 * $num2 = $multiplicacao || ";
   echo "$num1 / $num2 = $divisao";
}
