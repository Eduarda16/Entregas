<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale = 1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="css/style-3.css">
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
        <a href="index2.php"><h2 class="logo">Entregas</h2></a>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
        </label>

        <ul class="menu">
            <!-- <a href="index.html">Pagina inicial</a> !-->
            <a href="menu.php">Menu</a>
            <a href="sobrenos2.php">Sobre nós</a>
            <a href="login.php">Finalizar sessão</a>
        
            <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times"></i>
        </label>
        </ul>
    </div>


    <!-- SLIDESHOW !-->

    <div class="container">
        <div class="slider">
            <div class="slide slide1">
                <div class="caption">
                    <h2>Quem somos?</h2><br>
                    <p>Somos uma empresa prestadora de serviços que oferece para a sua empresa um sistema que implemente a qualidade e eficácia no gerenciamento de processos. </p>
                </div>
            </div>

            <div class="slide slide2">
                <div class="caption">
                    <h2>O que fazemos?</h2><br>
                    <p>Realizamos a gestão de entregas de sua empresa. Junto com o nosso modelo tecnológico de gestão de processos, a automatização das atividades de sua empresa se tornarão mais eficazes e mais lucrativas. </p>
                </div>
            </div>

            <div class="slide slide3">
                <div class="caption">
                    <h2>Como funciona?</h2><br>
                    <p>O sistema de gerenciamento de entregas funciona em torno da automatização dos seus processos e na facilidade de cadastro e emissão de dados/formulários. É um sistema totalmente intuítivo e simples de se utilizar, venha experimentar! </p>
                </div>
            </div>

            <div class="slide slide4">
                <div class="caption">
                    <h2>Vale a pena?</h2><br>
                    <p>O sistema é novo no mercado porém promete grandes benefícios para a sua empresa. Ainda estamos desenvolvendo e implementando novas atualizações que buscará auxiliar a eficácia e melhorar a satisfação de nossos clientes. </p>
                </div>
            </div>

            <div class="slide slide1">
                <div class="caption">
                    <h2>Quem somos?</h2><br>
                    <p>Somos uma empresa prestadora de serviços que oferece para a sua empresa um sistema que implemente a qualidade e eficácia no gerenciamento de processos. </p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>