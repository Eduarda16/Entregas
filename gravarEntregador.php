<?php
include './conexao.php';//incluir o arquivo conexao.php
$nome = $_POST["nome"];//Pega o valor da caixa de text
$email = $_POST["email"];//Pega o valor da caixa de texto
$cpf = $_POST["cpf"];//Pega o valor da caixa de text
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$carteira = $_POST["ncarteira"];//Pega o valor da caixa de text
$serie = $_POST["seriecart"];
$cnh = $_POST["cnh"];
$sql = 
"insert into entregador values(null,'$nome','$email','$cpf','$telefone','$endereco','$carteira','$serie','$cnh')";//Monta o comando Sql
//Executa o comando especificando os dados da conexÃ£o e o comando sql
if(mysqli_query($conexao, $sql)){
    echo "<script>alert('Entregador cadastrado com sucesso!');"
         
     . "window.location='cadastrarentregador.html';"
            . "</script>";
}else{
    echo mysqli_error($conexao);
}
?>
