<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form method="post" action="resultado.php">
    <label>informe os valores para o calculo ?</label><br />
</br>

    <label >Primeiro valor</label>
    <input type="number" name="valor1" /><br />
    <label >Segundo valor</label>
    <input type="number" name="valor2"/><br />
    
    <label>Selecione a operação</label>
    <select name="operacao">
        <option value="soma">Soma</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
    </select><br />

    <button type="submit">Calcular</button>
  </form>
</body>
</html>