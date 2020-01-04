<?php
include './conexao.php';//incluir o arquivo conexao.php
$nome = $_POST["nome"];//Pega o valor da caixa de text
$codigo=$_POST["codigo"];
$marca = $_POST["marca"];//Pega o valor da caixa de texto
$fornecedor = $_POST["fornecedor"];//Pega o valor da caixa de text
$qtd = $_POST["quantidade"];
$endereco = $_POST["endereco"];
$tamanho =$_POST["tamanho"];

$sql = 
"insert into produto values(null,'$nome','$codigo','$marca','$fornecedor','$qtd','$endereco','$tamanho')";//Monta o comando Sql
//Executa o comando especificando os dados da conexÃ£o e o comando sql
if(mysqli_query($conexao, $sql)){
    echo "<script>alert('Produto cadastrado com sucesso!');"
         
     . "window.location='cadastrarproduto.php';"
            . "</script>";
}else{
    echo mysqli_error($conexao);
}
?>
