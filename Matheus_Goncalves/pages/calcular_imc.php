<?php 

$weight = filter_var($_POST['weight'], FILTER_VALIDATE_FLOAT);
$height = filter_var($_POST['height'], FILTER_VALIDATE_FLOAT);

if(!$weight || !$height){
  echo 'É necessário informar peso e a altura';
}else{
  $imc = number_format($weight/($height**2),2) ;
  if($imc <=18.5){
  echo "Seu IMC é $imc, cuja classificação é: Abaixo do peso.";
  }else if($imc <=24.9){
    echo "Seu IMC é $imc, cuja classificação é: Peso ideal.";
  }else if($imc <=29.9){
    echo "Seu IMC é $imc, cuja classificação é: Levemente acima do peso.";
  }
  else if($imc <=34.9){
    echo "Seu IMC é $imc, cuja classificação é: Obesidade grau I.";
  }
  else if($imc <=39.9){
    echo "Seu IMC é $imc, cuja classificação é: Obesidade grau II (severa)";
  }
  else if($imc >=40){
    echo "Seu IMC é $imc, cuja classificação é: Obesidade grau III (mórbida)";
  }
}