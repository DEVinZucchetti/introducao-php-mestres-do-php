<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>CalculadoraIMC</h1>
  <form method="POST" action="calcular_imc.php">
    <label for="peso">Peso</label>
    <input type="number" id="peso" name="peso">
    <label for="altura">Altura</label>
    <input type="number" id="altura" name="altura" step="any">
    <button type="submit">Calcular</button>
  </form>
</body>
</html>