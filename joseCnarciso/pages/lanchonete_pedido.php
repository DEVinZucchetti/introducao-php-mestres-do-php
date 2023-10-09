<?php
// Obtém o código e a quantidade do formulário, filtrando e validando como float
$codigo = isset($_POST['codigo']) ? filter_var($_POST['codigo'], FILTER_VALIDATE_FLOAT) : null;
$quantidade = isset($_POST['quantidade']) ? filter_var($_POST['quantidade'], FILTER_VALIDATE_FLOAT) : null;

// Array associativo com códigos, preços e descrições de produtos
$codigosCadastrados = [
    100 => ['preco' => 1.20, 'descricao' => 'Pizza Filé'],
    101 => ['preco' => 1.30, 'descricao' => 'Pizza Brócolis com Bacon'],
    102 => ['preco' => 1.50, 'descricao' => 'Rizoto no Tacho'],
    103 => ['preco' => 1.20, 'descricao' => 'Lazanha'],
    104 => ['preco' => 1.30, 'descricao' => 'Frango Frito'],
    105 => ['preco' => 1.0, 'descricao' => 'Tilápia Frita'],
];

// Verifica se ambos código e quantidade foram fornecidos
if (isset($codigo) && isset($quantidade)) {
    // Verifica se o código existe no array
    if (array_key_exists($codigo, $codigosCadastrados)) {
        // Chama a função para calcular o preço e exibir informações
        calcularPreco($codigosCadastrados[$codigo]['preco'], $quantidade, $codigo, $codigosCadastrados[$codigo]['descricao']);
    } else {
        echo "Código inválido";
    }
} else {
    echo "Por favor, preencha todos os campos do formulário.";
}

// Função para calcular o preço e exibir informações do produto
function calcularPreco($preco, $quantidade, $codigo, $descricao)
{
    // Calcula o valor total formatado com duas casas decimais
    $valorTotal = number_format($preco * $quantidade, 2);

    // Exibe as informações do produto selecionado
    echo "Código selecionado: $codigo <br>";
    echo "Descrição do Produto: $descricao <br>";
    echo "Valor a ser pago: R$  $valorTotal <br>";
}
?>
