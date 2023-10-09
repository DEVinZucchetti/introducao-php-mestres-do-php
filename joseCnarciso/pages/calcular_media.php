<?php
$nota1 = filter_var($_POST['nota1'], FILTER_VALIDATE_FLOAT);
$nota2 = filter_var($_POST['nota2'], FILTER_VALIDATE_FLOAT);
$nota3 = filter_var($_POST['nota3'], FILTER_VALIDATE_FLOAT);
$nota4 = filter_var($_POST['nota4'], FILTER_VALIDATE_FLOAT);
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
if (!$nota1 || !$nota2 || !$nota3 || !$nota4) {
   echo "notas são obrigatorias";
   exit;
} else {

   echo "o sua média é: " . number_format($media, 2);
}