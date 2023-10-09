
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post" action="lanchonete_pedido.php">
    <label>Código</label>
    <input type="number" name="codigo"> </br>
    <label>Quantidade</label>
    <input type="number" name="quantidade"></br>
    <button type="submit">Fazer Pedido</button>
  </form>

  <table border="1">
    <thead>
      <tr>
        <th>Código</th>
        <th>Preço</th>
        <th>Descrição do Produto</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include('lanchonete_pedido.php');

      if (isset($codigosCadastrados) && !empty($codigosCadastrados)) {
          foreach ($codigosCadastrados as $codigoCadastrado => $info) {
              echo "<tr>";
              echo "<td>$codigoCadastrado</td>";
              echo "<td> R$:{$info['preco']}</td>";
              echo "<td>{$info['descricao']}</td>";
              echo "</tr>";
          }
      } else {
          echo "<tr><td colspan='3'>Nenhum código cadastrado</td></tr>";
      }
      ?>
    </tbody>
  </table>
</body>
</html>