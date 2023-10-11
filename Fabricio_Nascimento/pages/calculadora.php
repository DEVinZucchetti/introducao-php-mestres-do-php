<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h2>INFORME O CODIGO DA OPERACAO: </h2>

<p>1 - MULTIPLICACAO | 2 - DIVISAO | 3 - ADICAO | 4 - SUBTRACAO </p>
<br>

<form method="post" action="resultado.php">
    <label>VALOR 1</label>
    <br>
    <input type="number" name="valor_1">
    <br>
    <label>VALOR 2</label>
    <br>
    <input type="number" name="valor_2">
    <br>
    <label>OPERACAO</label>
    <br>
    <input type="text" inputmode="numeric" name="operacao">
    <br>
    <button type="submit">Resultado</button>
  </form>
</body>
</html>