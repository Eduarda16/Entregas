
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale = 1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/style-2.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <meta name="description" content="Site de entregas, Sistema de entregas">
    <meta name="keywords" content="Entregas, Sistema">
    <meta name="author" content="Marcos Rafael e Maria Eduarda">
</head>

<body>
 
   
    <div class="teste"></div>
 
    <!-- HEADER !-->
    <div class="header">
        <a href="index2.php"><h2 class="logo">Entregas</h2></a>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
        </label>
  
        
        <ul class="menu">
            <a href="index2.php">Página Inicial</a>
            <a href="sobrenos2.php">Sobre nós</a>
            <!--<a href="#">Serviços</a>-->
        
            <a href="sair.php">Finalizar Sessão </a>
        
            <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times"></i>
        </label>
        </ul>
    </div>

    <br><br><br><br>

    <!-- CENTRO !-->
    
    <div class="fundo-2"></div>

    <div class="services-section">
        <div class="inner-width">
            <h1 class="section-title">Nossos serviços</h1>
            <div class="border"></div>
            <div class="services-container">
               <div class="services-box">
                   <a href="telacadastro.html"><div class="service-icon">
                       <i class="fas fa-address-book"></i>
                   </div></a>
                   <div class="service-title">Cadastros</div>
                   <div class="service-desc">
                       Cadastre aqui o entregador, cliente ou seus produtos e automóveis. 
                   </div>
               </div> 

               <div class="services-box">
                   <a href="pedidoEntrega.php"><div class="service-icon">
                       <i class="fas fa-box-open"></i>
                   </div></a>
                   <div class="service-title">Pedido de Entrega</div>
                   <div class="service-desc">
                       Realize um pedido de entrega por aqui. Procure o produto desejado e o envie para o destino. 
                   </div>
               </div> 

               <div class="services-box">
                   <a href="calendario.php"><div class="service-icon">
                       <i class="fas fa-calendar-alt"></i>
                   </div></a>
                   <div class="service-title">Calendário</div>
                   <div class="service-desc">
                       Verifique aqui os prazos de data de entrega e outras informações.
                   </div>
               </div> 

               <div class="services-box">
                   <a href="rotas.php"><div class="service-icon">
                       <i class="fas fa-money-bill-wave"></i>
                   </div></a>
                   <div class="service-title">Rotas e Custos</div>
                   <div class="service-desc">
                       Pesquise pela Identificação da Entrega e verifique a rota, distância e custo para a entrega.
                   </div>
               </div> 

                <div class="services-box">
                   <a href="suporte.html"><div class="service-icon">
                       <i class="fas fa-headset"></i>
                   </div></a>
                   <div class="service-title">Suporte</div>
                   <div class="service-desc">
                       Espaço para atendimento ao cliente. Caso tenha alguma dúvida a respeito do sistema, tire-as aqui.
                   </div>
               </div> 

            </div>
        </div>
    </div>
   
</body>
