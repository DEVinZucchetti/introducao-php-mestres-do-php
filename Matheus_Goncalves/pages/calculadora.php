<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMC</title>

  <style>
  .container {
    margin: 0 auto;
    width: 70%;
    border: 1px solid #000;
    padding: 10px;

    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
  }
  </style>
</head>

<body>
  <?php echo $_SERVER['PHP_SELF'] ?>
  <form class="container" method="post" action="resultado.php">
    <input type="number" step="0.01" name="number1" placeholder="Número: ">
    <input type="number" step="0.01" name="number2" placeholder="Número: ">
    <label>Operações:</label>
    <select name="operation">
      <option value="">Selecione</option>
      <option value="1">Adição</option>
      <option value="2">Subtração</option>
      <option value="3">Multipicação</option>
      <option value="4">Divisão</option>
    </select>
    <button type="submit">Calcular</button>
  </form>

</body>

</html>