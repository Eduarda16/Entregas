<?php
include_once 'conexao.php';
$qual=filter_input(INPUT_POST,'palavra', FILTER_SANITIZE_STRING);
$result_prod="SELECT nome FROM produto WHERE nome LIKE '%$qual%'";
$result_cod="SELECT codigo FROM produto WHERE nome LIKE '%$qual%'";
$resultado_prod=mysqli_query($conexao,$result_prod);
$resultado_cod=mysqli_query($conexao,$result_cod);

if(($resultado_prod) and ($resultado_prod->num_rows !=0)){
    if(($resultado_cod) and ($resultado_cod->num_rows !=0)){
    while($row_prod=mysqli_fetch_assoc($resultado_prod) )
      while($row_cod=mysqli_fetch_assoc($resultado_cod))
            echo "<option>".$row_prod['nome']." "."Código:".$row_cod['codigo']."</option>";

    
    }
}
else{
    
    echo "Produto não cadastrado";
}


?>