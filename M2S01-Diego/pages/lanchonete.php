<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lanchonete</title>

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
  <form class="container" method="post" action="calcular_preco.php">
    <h2>Lanchonete</h2>
    
    <div>
      
      <label for="codigo">Codigo do Produto</label>
      <input type="text" name="codigo"/> (100 - 105)
    </div>
    <br />
    <div>
      <label for="quantidade">Quantidade</label>
      <input type="number" name="quantidade">
    </div>
    <br />
    <button type="submit">Calcular</button><br />
  </form>

</body>

</html>