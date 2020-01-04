<?php
include './conexao.php';//incluir o arquivo conexao.php
$tipo = $_POST["tipo"];//Pega o valor da caixa de texto
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$capacidade = $_POST["capacidade"];
$placa = $_POST["placa"];
$sql = 
"insert into transporte values(null,'$tipo','$marca', '$modelo','$capacidade','$placa')";//Monta o comando Sql
//Executa o comando especificando os dados da conexÃ£o e o comando sql
if(mysqli_query($conexao, $sql)){
    echo "<script>alert('transporte cadastrado com sucesso!');"
    . "window.location='cadastrartransporte.html';"
            . "</script>";
}else{
    echo mysqli_error($conexao);
}
?>