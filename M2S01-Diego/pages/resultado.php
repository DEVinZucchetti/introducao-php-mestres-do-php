<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

$valorUm = filter_input(INPUT_POST, 'valorUm', FILTER_VALIDATE_FLOAT);
$valorDois = filter_input(INPUT_POST, 'valorDois', FILTER_VALIDATE_FLOAT);
$operacao = filter_input(INPUT_POST, 'operacao', FILTER_VALIDATE_INT);

if ($valorUm && $valorDois && $operacao) {

  switch ($operacao) {
    case $operacao == "+";
      $resultado = $valorUm + $valorDois;
      echo $valorUm ." + ". $valorDois." = ".$resultado;
      break;
    case $operacao == "-";
      $resultado = $valorUm - $valorDois;
      echo $valorUm ." - ". $valorDois." = ".$resultado;
      break;
    case $operacao == "*";
      $resultado = $valorUm * $valorDois;
      echo $valorUm ." x ". $valorDois." = ".$resultado;
      break;
    case $operacao == "/";
      $resultado = $valorUm / $valorDois;
      echo $valorUm ." / ". $valorDois." = ".$resultado;
      break;
  }
}

?>
</body> 
</html>