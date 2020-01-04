<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale = 1.0">
    <title>Rotas</title>
    <link rel="stylesheet" href="css/style-2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
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
            <a href="sobrenos2.php" id="letra">Sobre nós</a>
         
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
             
              
                <form method="POST"  name="Form2" id='Form2'>
                 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                     <script type='text/javascript'>
                $(document).ready(function(){
                    $("input[name='id']").blur(function(){
                        var $nomecli=$("input[name='nomecli']");
                          var $endereco=$("input[name='ende']");
                           var $cep=$("input[name='cep']");
                          var $telefone=$("input[name='tel']");
                          $.getJSON('func2.php',{
                              id : $ (this).val()},
                   function(json){
                        $nomecli.val(json.nomecli);
                        $endereco.val(json.endereco);
                         $cep.val(json.cep);
                        $telefone.val(json.telefone);
                    });
                    
                });
            });
                
                </script>
                  <h1>Pesquisar o Endereço da Entrega</h1>
                <input type="text" name="id" class="tel" placeholder="Código da Entrega">
                 <input type="text" name="nomecli" class="tel" placeholder="Nome do Cliente">
                  <input type="text" name="ende" class="tel" placeholder="Endereco da Entrega*">
                 <input type="text" name="tel" class="tel" placeholder="Telefone para Contato">
                 <input type="text" name="cep" class="tel" placeholder="CEP">     
           
              <input type="text" name="cepOrigem" id="cepOrigem" class="tel" placeholder="Cep de Origem">
              <input type="text" name="cep" id="cep" class="tel" placeholder="CEP de Destino">
              <button type="submit" class="btnCadCli" id="btnPoss">Calcular Custo</button>
                </form>
                <div class="ResultadoPreco" id="preco"></div>
                <script>
                   $(document).ready(function(){
                       $('#Form2').on('submit',function(event){
                           event.preventDefault();
                           var Dados=$(this).serialize();
                           
                           $.ajax({
                               url:'controllerCorreios.php',
                               method: 'post',
                               dataType:'html',
                               data:Dados,
                               success:function(Dados){
                                   $('.ResultadoPreco').html(Dados);
                               },
                              
                           });
                       });
                       
                       
                   });
                   
                
                </script>
              </div>
 </div>
</body>
</html>