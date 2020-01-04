<?php

include_once ("conexao.php");
function retorna($id,$conexao){
    $result_entreg="SELECT * FROM pedido WHERE id ='$id' LIMIT 1";
    $resultado_entreg=mysqli_query($conexao,$result_entreg);
    
    if($resultado_entreg->num_rows){
        $row_entreg=mysqli_fetch_assoc($resultado_entreg);
        $valores['nomecli']=$row_entreg['nomecli'];
          $valores['endereco']=$row_entreg['endereco']; 
        $valores['telefone']=$row_entreg['telefone'];
         $valores['cep']=$row_entreg['cep'];
      
        
        
        
    }else{
        $valores['nomecli']='Pedido de Entrega não Encontrado';
    }
    return json_encode($valores);
}
if(isset($_GET['id'])){
    echo retorna($_GET['id'],$conexao);
    
}


?>