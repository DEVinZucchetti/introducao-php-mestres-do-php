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
  <form class="container" method="post" action="cartaFerias.php">
    <label>Peso (kg):</label>
    <input type="number" placeholder="Informe seu peso" name="weight" />
    <br />
    <label>Altura (m):</label>
    <input type="number" placeholder="Informe sua altura" name="height" />
    <br />
    <button type="submit">Calcular</button>
  </form>

</body>

</html>