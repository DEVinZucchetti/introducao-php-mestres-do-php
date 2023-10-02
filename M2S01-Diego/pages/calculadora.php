<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>

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
  <form class="container" method="post" action="resultado.php">
    <h2>Calculadora</h2>
    <div>
      <label for="valorUm">Valor 1</label>
      <input type="text" name="valorUm" />
    </div>
    <br />
    <div>
      <label for="valorDois">Valor 2</label>
      <input type="text" name="valorDois">
    </div>
    <br />
    (+),(-),(*) ou (/)
    <div>
      <label for="operacao">Operação</label>      
      <input type="text" name="operacao">
    </div>
    <br />  
    <button type="submit">Calcular</button><br />
  </form>
</body>

</html>