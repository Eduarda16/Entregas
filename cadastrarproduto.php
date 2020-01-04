<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale = 1.0">
    <title>Página Inicial - Cadastro</title>
    <link rel="stylesheet" href="css/style-2.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <meta name="description" content="Site de entregas, Sistema de entregas">
    <meta name="keywords" content="Entregas, Sistema">
    <meta name="author" content="Marcos Rafael e Maria Eduarda">
</head>
<body>
        <!-- BACKGROUND -->
        <div class="teste"></div>

        <!-- HEADER !-->
        <div class="header">
            <a href="telacadastro.html"><i class="fas fa-arrow-alt-circle-left" id="size"></i></a>
            <a href="index.php"><h1 class="logo">Entregas</h1></a>
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                <i class="fas fa-ellipsis-h"></i>
            </label>
    
            <ul class="menu">
            <a href="menu.php" id="letra">Menu</a>    
            <a href="sobrenos.html" id="letra">Sobre nós</a>

            <a href="sair.php" id="letra">Finalizar Sessão</a>
            <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times"></i>
        </label>
        </ul>
        </div>
    
        <br><br><br><br>

        <!-- CORPO -->

        <!-- [ID e ID entrega] Preço do frete / Nome / Marca / Fornecedor / Local do fornecedor / Quantidade no estoque -->


        <!-- CADASTRAR ENTREGADOR: Nome completo / CPF / Endereço / Número na carteira de trabalho / CNH / E-mail /-->
        <div class="contact-section">
            <div class="inner-width">
                <form method="POST" action="gravarProduto.php">
                <h1>Cadastrar Produto</h1>
                <input type="text" name="nome" class="name" placeholder="Nome do produto*">
                
                <input type="text" name="marca" class="email" placeholder="Marca do produto*">
                <input type="number" name="quantidade" class="qntEst" placeholder="Quantidade no Estoque*">
              
                     <input type="text" name="fornecedor" class="forProd" placeholder="Fornecedor do produto*">
                    <select type="text" name="tamanho" class="tam" placeholder="Tamanho*"> 
                    <option   value="0" selected disabled="Tamanho">Tamanho*</option>
                    <option id="cor">Pequeno (de 1cm à 50cm)</option>
                        <option id="cor">Médio (de 50cm à 1,5m)</option>
                        <option id="cor">Grande (de 1,5m à 10m)</option>  
                        <input type="text" name="codigo" class="codProd" placeholder="Código do produto*"> 
                         <input type="text" name="endereco" class="endFor" placeholder="Endereco do fornecedor*"> 
                        <button class="btnCadCli">Cadastrar</button></form>
                               
                                    
                    
                  
                      
               
                  
            
            
                
               
         
            </div>
        </div>

</body>
</html>