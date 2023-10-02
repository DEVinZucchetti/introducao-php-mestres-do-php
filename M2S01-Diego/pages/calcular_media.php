<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
</head>


<?php

$notaUm = $_POST["notaUm"];
$notaDois = $_POST["notaDois"];
$notaTres = $_POST["notaTres"];
$notaQuatro = $_POST["notaQuatro"];

if ($notaUm && $notaDois && $notaTres && $notaQuatro) {

    $media = ($notaUm + $notaDois + $notaTres + $notaQuatro) / 4;
}

?>

<body>
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
</body>

</html>