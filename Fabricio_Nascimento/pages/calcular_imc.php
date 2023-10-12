<?php 

$weight = filter_var($_POST['weight'], FILTER_VALIDATE_FLOAT);
$height = filter_var($_POST['height'], FILTER_VALIDATE_FLOAT);



if(!$weight || !$height){

    echo 'O peso e a altura são necessarios';
    exit;
}else{
    $imc = number_format($weight / ($height * $height),2);

    echo " O seu imc e $imc";
}
?>