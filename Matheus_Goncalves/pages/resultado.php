<?php 

$number1 = filter_var($_POST['number1'], FILTER_VALIDATE_FLOAT);
$number2 = filter_var($_POST['number2'], FILTER_VALIDATE_FLOAT);
$operation = filter_var($_POST['operation'], FILTER_VALIDATE_INT);

if(!$number1 || !$number2 || !$operation){
  echo 'Dados incompletos';
}else{
  if($operation === 1){
    $result = number_format(($number1 + $number2),4);
    echo "Resultado: $number1 + $number2 = $result";
  }else if($operation === 2){
    $result = number_format(($number1 - $number2),4);
    echo "Resultado: $number1 - $number2 = $result";
  }else if($operation === 3){
    $result = number_format(($number1 * $number2),4);
    echo "Resultado: $number1 x $number2 = $result";
  }else if($operation === 4){
    $result = number_format(($number1 / $number2),4);
    echo "Resultado: $number1 / $number2 = $result";
  }
  
}