<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lanchonete</title>
</head>
<body>

<h2>INFORME SEU PEDIDO COM OS SEGUINTES CODIGOS: </h2>

<p>100 - REFRIGERANTE | 101 - SANDUICHE | 102 - SOPA | 103 - SUCO | 104 - SALADA | 105 - VITAMINA</p>
<br>


<form method="post" action="calcular_preco.php">
    <label>Código</label>
    <br>
    <input type="number"  name="codigo">
    <br>
    <label>Quantidade</label>
    <br>
    <input type="text" inputmode="numeric" name="quantidade">
    <br>
    <button type="submit">Calcular valor</button>
  </form>
</body>
</html>