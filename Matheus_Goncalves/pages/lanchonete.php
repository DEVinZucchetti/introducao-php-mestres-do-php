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
  <div>
    <table class="container">
      <tr>
        <td>Código</td>
        <td>Produto</td>
        <td>Valor</td>
      </tr>
      <tr>
        <td>100</td>
        <td>Hambúrguer</td>
        <td>R$ 12.00</td>
      </tr>
      <tr>
        <td>101</td>
        <td>Sanduíche de Pernil</td>
        <td>R$ 9.00</td>
      </tr>
      <tr>
        <td>102</td>
        <td>Bauru</td>
        <td>R$ 15.00</td>
      </tr>
      <tr>
        <td>103</td>
        <td>Lanche de Mortadela</td>
        <td>R$ 35.00</td>
      </tr>
      <tr>
        <td>104</td>
        <td>Refrigerante</td>
        <td>R$ 6.00</td>
      </tr>
      <tr>
        <td>105</td>
        <td>Suco</td>
        <td>R$ 5.00</td>
      </tr>
    </table>
  </div>
  <form class="container" method="post" action="calcular_preco.php">
    <label>Produto:</label>
    <input type="text" placeholder="Código do produto" name="productCode" step="0.01" />
    <br />
    <label>Quantidade:</label>
    <input type="text" placeholder="Quantidade desejada" name="productQuantity" step="0.01" />
    <br />
    <button type="submit">Fazer pedido</button>
  </form>

</body>

</html>