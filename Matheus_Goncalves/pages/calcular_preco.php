<?php 

$productCode = filter_var($_POST['productCode'], FILTER_VALIDATE_FLOAT);
$productQuantity = filter_var($_POST['productQuantity'], FILTER_VALIDATE_FLOAT);

if(!$productCode || !$productQuantity){
  echo 'É necessário informar produto e quantidade';
}else{
  switch ($productCode) {
    case 100: {
      $total = number_format((12 * $productQuantity),2);
      echo('O total do sua compra é: '.$total);
      break;
    }
    case 101: {
      $total = number_format((19 * $productQuantity),2);
      echo('O total do sua compra é: '.$total);
      break;
    }
    case 102:
      $total = number_format((15 * $productQuantity),2);
      echo('O total do sua compra é: '.$total);
      break;
    case 103: {
      $total = number_format((35 * $productQuantity),2);
      echo('O total do sua compra é: '.$total);
      break;
    }
    case 104: {
      $total = number_format((6 * $productQuantity),2);
      echo('O total do sua compra é: '.$total);
      break;
    }
    case 105: {
      $total = number_format((5 * $productQuantity),2);
      echo('O total do sua compra é: '.$total);
      break;
    }
    default:
      echo('Código inválido');
  }
}