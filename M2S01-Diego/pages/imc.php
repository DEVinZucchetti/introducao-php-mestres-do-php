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
  <form class="container" method="post" action="calcular_imc.php">
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
  </form>  
</body>

</html>