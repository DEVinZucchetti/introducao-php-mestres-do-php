<?php
$altura = $_POST["altura"];
  $peso = $_POST["peso"];

  if ($altura && $peso) {


    $imc = ($peso / ($altura * $altura)) * 10000;

    echo "Altura: " . $altura ."<br>";
    echo "Peso: " . $peso ."<br>";
    echo "IMC: " . number_format($imc, 2) ."<br>";
  }
  if ($imc < 18.5) {
    echo "Classificação: Abaixo do peso";
  } elseif ($imc >= 18.5 && $imc < 24.9) {
    echo "Classificação: Peso normal";
  } elseif ($imc >= 25 && $imc < 29.9) {
    echo "Classificação: Sobrepeso";
  } elseif ($imc >= 30 && $imc < 34.9) {
    echo "Classificação: Obesidade Grau I";
  } elseif ($imc >= 35 && $imc < 39.9) {
    echo "Classificação: Obesidade Grau II";
  } else {
    echo "Classificação: Obesidade Grau III";
  }

  ?>