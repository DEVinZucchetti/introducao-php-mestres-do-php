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
  <form class="container" method="post" action="calcular_media.php">
    <label>Nota 1:</label>
    <input type="number" placeholder="Informe nota 1" name="n1" step="0.1" />
    <label>Nota 2:</label>
    <input type="number" placeholder="Informe nota 2" name="n2" step="0.1" />
    <label>Nota 3:</label>
    <input type="number" placeholder="Informe nota 3" name="n3" step="0.1" />
    <label>Nota 4:</label>
    <input type="number" placeholder="Informe nota 4" name="n4" step="0.1" />
    <button type="submit">Calcular</button>
  </form>

</body>

</html>