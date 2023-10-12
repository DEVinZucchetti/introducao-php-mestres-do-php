<?php 

$nota_1 = filter_var($_POST['nota_1'], FILTER_VALIDATE_FLOAT);
$nota_2 = filter_var($_POST['nota_2'], FILTER_VALIDATE_FLOAT);
$nota_3 = filter_var($_POST['nota_3'], FILTER_VALIDATE_FLOAT);
$nota_4 = filter_var($_POST['nota_4'], FILTER_VALIDATE_FLOAT);



if(!$nota_1 || !$nota_2 || !$nota_3 || !$nota_4){
    echo "Preencha todos os campos";
    exit;
    
}else{
    $media = number_format(($nota_1+$nota_2+$nota_3+$nota_4)/4,2);

    echo " A media do aluno e : $media";
}

?>