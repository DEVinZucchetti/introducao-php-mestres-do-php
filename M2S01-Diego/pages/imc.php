<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculo img</title>

  <style>
    .container {
      margin: 100px;
      width: 80%;
      border: 2px solid;
      padding: 5px;

      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }
  </style>
</head>

<body>
  <form class="container" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <h2>Calculadora de IMC</h2>
    <div>
      <label for="altura">Altura</label>
      <input type="number" name="altura" />
    </div>
    <br />
    <div>
      <label for="peso">Peso</label>
      <input type="number" name="peso">
    </div>
    <br />
    <button type="submit">Calcular</button><br />
    <div>
      <b>Resultado:</b> <?php
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
    </div>
  </form>

  
</body>

</html>