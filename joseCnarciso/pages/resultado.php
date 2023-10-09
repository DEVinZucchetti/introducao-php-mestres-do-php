<?php
$numero1 = filter_input(INPUT_POST, 'valor1', FILTER_VALIDATE_INT);
$numero2 = filter_input(INPUT_POST, 'valor2', FILTER_VALIDATE_INT); 

$operacao = isset($_POST['operacao']) ? $_POST['operacao'] : '';

if (!$numero1 || !$numero2) {
    echo "É obrigatório informar os dois valores";
    exit;
} else {
    switch ($operacao) {
        case 'soma':
            $resultado = $numero1 + $numero2;
            $simbolo = '+';
            break;
        case 'subtracao':
            $resultado = $numero1 - $numero2;
            $simbolo = '-';
            break;
        case 'multiplicacao':
            $resultado = $numero1 * $numero2;
            $simbolo = '*';
            break;
        case 'divisao':
            $resultado = $numero1 / $numero2;
            $simbolo = '/';
            break;
        default:
            echo "É obrigatório selecionar uma operação válida.";
            exit;
    }

    echo "$numero1 $simbolo $numero2 = $resultado";
}
?>