<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale = 1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <meta name="description" content="Site de entregas, Sistema de entregas">
    <meta name="keywords" content="Entregas, Sistema">
    <meta name="author" content="Marcos Rafael e Maria Eduarda">
</head>
<body>

    <!-- CARREGAMENTO !-->

    <div class="loader">
        <img src="img/loading.gif" id="loading" alt="Loading...">
    </div> 

    <script type="text/javascript">
        window.addEventListener("load", function() {
            const loader = document.querySelector(".loader");
            loader.className += " hidden";
        });
    </script>

    <!-- HEADER !-->

    <div class="header">
        <a href="index.php"><h2 class="logo">Entregas</h2></a>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
        </label>

        <ul class="menu">
          
            <a href="index.php">Pagina inicial</a>
            <!-- <a href="principal.html">Acesse sua Conta</a> !-->
            <a href="sobrenos.html">Sobre nós</a>
            <!--<a href="#">Trabalhos</a>-->
          
            <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times"></i>
        </label>
        </ul>
    </div>
  
    <form method="POST" action="validar.php" class="login-form"> 
        <h1 class="p-login">Entrar</h1>

        <div class="txtb">
            <input type="text" name="cnpj">
            <span data-placeholder="CNPJ"></span>
        </div>

        <div class="txtb">
            <input type="password" name="senha">
            <span data-placeholder="Senha"></span>
        </div>
        <br>
        <input type="submit" class="logbtn" value="Entrar">

        <!--<div class="bottom-text">
            Para cadastrar sua empresa <a href="cadastro.html">Clique aqui!</a>
        </div> -->

        <div class="social-buttons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </form>

     <script type="text/javascript">
        $(".txtb input").on("focus",function(){
            $(this).addClass("focus");
        });

        $(".txtb input").on("blur",function(){
            if($(this).val() == "")
            $(this).removeClass("focus");
        });
    </script> 

</body>
