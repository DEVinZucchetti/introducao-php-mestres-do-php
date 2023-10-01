<?php 
$nota1 = filter_input(INPUT_POST, 'nota1', FILTER_VALIDATE_FLOAT);
$nota2 = filter_input(INPUT_POST, 'nota2', FILTER_VALIDATE_FLOAT);
$nota3 = filter_input(INPUT_POST, 'nota3', FILTER_VALIDATE_FLOAT);
$nota4 = filter_input(INPUT_POST, 'nota4', FILTER_VALIDATE_FLOAT);

$media= ($nota1 + $nota2 + $nota3 + $nota4)/4;

echo "<table border='1'>
        <tr>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Nota 4</th>
            <th>Média</th>
        </tr>
        <tr>
            <td>$nota1</td>
            <td>$nota2</td>
            <td>$nota3</td>
            <td>$nota4</td>
            <td>$media</td>
        </tr>"



?>


