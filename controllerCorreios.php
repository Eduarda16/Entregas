<?php
include("ClassCorreios.php");

$cepOrigem=filter_input(INPUT_POST,'cepOrigem',FILTER_SANITIZE_SPECIAL_CHARS);
$cep=filter_input(INPUT_POST,'cep',FILTER_SANITIZE_SPECIAL_CHARS);



$correios=new ClassCorreios();
$correios->pesquisaPreco($cepOrigem,$cep);
?>
