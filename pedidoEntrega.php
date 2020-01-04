<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale = 1.0">
    <title>Pedido de Entrega</title>
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
            <a href="menu.php"><i class="fas fa-arrow-alt-circle-left" id="size"></i></a>
            <a href="index2.php"><h1 class="logo">Entregas</h1></a>
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                <i class="fas fa-ellipsis-h"></i>
            </label>
    
            <ul class="menu">
                
            <a href="menu.php" id="letra">Menu</a>    
            <a href="sobreno2.php" id="letra">Sobre nós</a>
       
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
                     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                     <script type='text/javascript'>
                $(document).ready(function(){
                    $("input[name='cpfcli']").blur(function(){
                        var $nomecli=$("input[name='nomecli']");
                          var $endereco=$("input[name='ende']");
                           var $cep=$("input[name='cep']");
                          var $telefone=$("input[name='tel']");
                          $.getJSON('func.php',{
                              cpfcli : $ (this).val()},
                   function(json){
                        $nomecli.val(json.nomecli);
                        $endereco.val(json.endereco);
                        $cep.val(json.cep);
                        $telefone.val(json.telefone);
                    });
                    
                });
            });
                
                </script>
                <form method="POST" action="gravarPedido.php">
                <h1>Nova Entrega</h1>
                 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script type="text/javascript" src="personalizado.js"></script>
           <input type="text" class="cnpj" id="pesquisa" name="pesquisa" placeholder="Pesquise o produto"/>
                
         
          
                <ul> <select name="produto" value="0" class="resultado">    
                </select>
           </ul>
           <input type="text" name="codigo" class="digCodProd" placeholder="Digite o código do produto">
                <input type="number" name="qtd" class="qntProdu" placeholder="Quantidade">
                
                    
                <input type="date" name="data" class="tel" placeholder="Data">
             
                 
                <input type="text" name="cpfcli" class="tel" id="margem" placeholder="CPF do Cliente*">
                 <input type="text" name="nomecli" class="nomeCli" placeholder="Nome do Cliente">
                  <input type="text" name="ende" class="endEnt" placeholder="Endereco da Entrega*">
                   <input type="text" name="cep" class="tel" id="mudanca" placeholder="CEP*">
                 <input type="text" name="tel" class="tel" placeholder="Telefone para Contato">

                <button id="btnPos">Cadastrar</button></form>
            </div>
        </div>

</body>
</html>