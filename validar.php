<?php
    
           
$cnpj = $_POST["cnpj"];
$senha = $_POST["senha"];
        
            

include './conexao.php';
$sql = "SELECT * FROM empresa WHERE cnpj = '$cnpj' and senha = '$senha'";
$result = mysqli_query($conexao, $sql);
$linhas = mysqli_num_rows($result);
      
      
     
if($linhas > 0){
    session_start();
    while($dados=  mysqli_fetch_array($result)){
    $_SESSION["idempresa"] = $dados["id"];
    $_SESSION["nome"] = $dados["nome"];
            
    }  
    
    echo "<script>"
    . "window.location='menu.php';"
            . "</script>";
    
    
}else{
    echo "<script>"
    . "alert('Dados incorretos! Tente novamente.');"
    . "window.location='login.php';"
            . "</script>";
}
          

?>