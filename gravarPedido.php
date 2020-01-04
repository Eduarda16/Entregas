<?php
include './conexao.php';//incluir o arquivo conexao.php
$codigo = $_POST["codigo"];//Pega o valor da caixa de texto
$qtd = $_POST["qtd"];
$data = $_POST["data"];
$nome = $_POST["nomecli"];
$endereco = $_POST["ende"];
$cep=$_POST["cep"];
$telefone = $_POST["tel"];
$title="Entrega";
$sql = 
"insert into pedido values(null,'$codigo','$qtd', '$data','$nome','$endereco','$cep','$telefone')";
$sql2=
"insert into eventos values(null, '$title','$data','$data')";

//Executa o comando especificando os dados da conexÃ£o e o comando sql
if(mysqli_query($conexao, $sql)){
    if(mysqli_query($conexao,$sql2)){
     
    echo "<script>alert('Pedido cadastrado com sucesso!');"
    . "window.location='pedidoEntrega.php';"
            . "</script>";
    }}else{
    echo mysqli_error($conexao);
}
?>