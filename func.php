<?php
include_once ("conexao.php");
function retorna($cpfcli,$conexao){
    $result_cli="SELECT * FROM cliente WHERE cpf ='$cpfcli' LIMIT 1";
    $resultado_cli=mysqli_query($conexao,$result_cli);
    
    if($resultado_cli->num_rows){
        $row_cli=mysqli_fetch_assoc($resultado_cli);
        $valores['nomecli']=$row_cli['nome'];
        $valores['telefone']=$row_cli['telefone'];
          $valores['cep']=$row_cli['cep'];
        $valores['endereco']=$row_cli['endereco']; 
        
        
        
    }else{
        $valores['nomecli']='Cliente não Encontrado';
    }
    return json_encode($valores);
}
if(isset($_GET['cpfcli'])){
    echo retorna($_GET['cpfcli'],$conexao);
    
}
?>