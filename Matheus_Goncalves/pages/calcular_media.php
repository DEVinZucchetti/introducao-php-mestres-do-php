<?php 

$number1 = filter_var($_POST['n1'], FILTER_VALIDATE_FLOAT);
$number2 = filter_var($_POST['n2'], FILTER_VALIDATE_FLOAT);
$number3 = filter_var($_POST['n3'], FILTER_VALIDATE_FLOAT);
$number4 = filter_var($_POST['n4'], FILTER_VALIDATE_FLOAT);


if(!$number1 || !$number2 || !$number3 || !$number4){
  echo 'Dados incompletos';
}else{
  $result = number_format((($number1 +$number2+$number3+$number4)/4),2);
  echo "A média final é: $result";
}