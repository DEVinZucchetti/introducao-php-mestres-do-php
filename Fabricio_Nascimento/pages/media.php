<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Media</title>
</head>
<body>
<h2>INFORME AS NOTAS DO ALUNO: </h2>


<br>

<form method="post" action="calcular_media.php">
    <label>NOTA 1</label>
    <br>
    <input type="text" inputmode="numeric" name="nota_1">
    <br>
    <label>NOTA 2</label>
    <br>
    <input type="text" inputmode="numeric" name="nota_2">
    <br>
    <label>NOTA 3</label>
    <br>
    <input type="text" inputmode="numeric" name="nota_3">
    <br>
    <label>NOTA 4</label>
    <br>
    <input type="text" inputmode="numeric" name="nota_4">
    <br>
    <button type="submit">Calcular media</button>
  </form>
</body>
</html>