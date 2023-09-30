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
  <form class="container" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
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
    <div>
      <?php

      $notaUm = $_POST["notaUm"];
      $notaDois = $_POST["notaDois"];
      $notaTres = $_POST["notaTres"];
      $notaQuatro = $_POST["notaQuatro"];

      if ($notaUm && $notaDois && $notaTres && $notaQuatro) {

        $media = ($notaUm + $notaDois + $notaTres + $notaQuatro) / 4;
        }

      ?>
      <table border="1">
        <tr>
          <th>Nota</th>
          <th>Valor</th>
        </tr>
        <tr>
          <td>Nota 1</td>
          <td><?php echo $notaUm; ?></td>
        </tr>
        <tr>
          <td>Nota 2</td>
          <td><?php echo $notaDois; ?></td>
        </tr>
        <tr>
          <td>Nota 3</td>
          <td><?php echo $notaTres; ?></td>
        </tr>
        <tr>
          <td>Nota 4</td>
          <td><?php echo $notaQuatro; ?></td>
        </tr>
        <tr>
          <td>Média</td>
          <td><?php echo $media; ?></td>
        </tr>
      </table>
    </div>
  </form>


</body>

</html>