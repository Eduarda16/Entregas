<?php
include './conexao.php';//incluir o arquivo conexao.php
$nome = $_POST["nome"];//Pega o valor da caixa de text
$email = $_POST["email"];//Pega o valor da caixa de texto
$cpf = $_POST["cpf"];//Pega o valor da caixa de text
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$cep=$_POST["cep"];
$sql = 
"insert into cliente values(null,'$nome','$email','$cpf','$telefone','$endereco','$cep')";//Monta o comando Sql
//Executa o comando especificando os dados da conexÃ£o e o comando sql
if(mysqli_query($conexao, $sql)){
    echo "<script>alert('Cliente cadastrado com sucesso');"
         
     . "window.location='cadastrarcliente.html';"
            . "</script>";
}else{
    echo mysqli_error($conexao);
}
?>
