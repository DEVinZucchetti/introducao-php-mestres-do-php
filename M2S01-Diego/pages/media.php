<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Media</title>

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
  <form class="container" method="post" action="calcular_media.php">
    <h2>Media</h2>
    <div>
      <label for="notaUm">Nota 1</label>
      <input type="number" name="notaUm" />
    </div>
    <br />
    <div>
      <label for="notaDois">Nota 2</label>
      <input type="number" name="notaDois">
    </div>
    <br />
    <div>
      <label for="notaTres">Nota 3</label>
      <input type="number" name="notaTres">
    </div>
    <br />
    <div>
      <label for="notaQuatro">Nota 4</label>
      <input type="number" name="notaQuatro">
    </div>
    <br />
    <button type="submit">Calcular</button><br />
  </form>
</body>

</html>