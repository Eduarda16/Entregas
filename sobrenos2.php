<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale = 1.0">
    <title>Página Inicial - Principal</title>
    <link rel="stylesheet" href="css/style-aboutus.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <meta name="description" content="Site de entregas, Sistema de entregas">
    <meta name="keywords" content="Entregas, Sistema">
    <meta name="author" content="Marcos Rafael e Maria Eduarda">
    <link rel="stylesheet" href="http://youtube.local/assests/dcode.css">
    <link rel="shortcut icon" href="http://youtube.local/assests/favicon.ico">

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
        <a href="index2.php"><h1 class="logo">Entregas</h1></a>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
        </label>

        <ul class="menu">
            <a href="index2.php" id="letra">Pagina Inicial</a>    
            <a href="menu.php" id="letra">Menu</a>
         
            <!-- <a href="principal.html" id="letra">Finalizar Sessão</a>!-->
            <label for="chk" class="hide-menu-btn">
            <i class="fas fa-times"></i>
        </label>
        </ul>
    </div>

    <!-- SOBRE NÓS !-->

    <section>
        <div class="container">
            <h1 class="heading">Conheça a equipe</h1>
            <div class="card-wrapper">

                <!-- MARCOS !-->

                <div class="card">
                    <img src="img/bg.jpg" alt="card-bg" class="card-img">
                    <img src="img/foto1.jpg" alt="foto de perfil" class="profile-img">
                    <h1>Marcos Giulianetti</h1>
                    <p class="job-tittle">Desenvolvedor Front-End</p>
                    <p class="about">
                        Aluno do segundo semestre. 
                    </p>
                    <a href="#" class="btn">Contato</a>
                    <ul class="social-media">
                        <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-google-plus-square"></i></a></li>
                    </ul>
                </div>

                <!-- DUDA !-->

                <div class="card">
                    <img src="img/bg.jpg" alt="card-bg" class="card-img">
                    <img src="img/foto2.jpg" alt="foto de perfil" class="profile-img">
                    <h1>Maria Eduarda da Silva</h1>
                    <p class="job-tittle">Desenvolvedora Back-End</p>
                    <p class="about">
                        Aluna do segundo semestre.
                    </p>
                    <a href="#" class="btn">Contato</a>
                    <ul class="social-media">
                        <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-google-plus-square"></i></a></li>
                    </ul>
                </div>

                <!-- RUBIA !-->

                <div class="card">
                    <img src="img/bg.jpg" alt="card-bg" class="card-img">
                    <img src="img/foto3.jpeg" alt="foto de perfil" class="profile-img">
                    <h1>Rubia Maria P. Dumas</h1>
                    <p class="job-tittle">Documentação de Software</p>
                    <p class="about">
                        Aluna do segundo semestre.
                    </p>
                    <a href="#" class="btn">Contato</a>
                    <ul class="social-media">
                        <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-google-plus-square"></i></a></li>
                    </ul>
                </div>

                <!-- FRED !-->

                <div class="card">
                    <img src="img/bg.jpg" alt="card-bg" class="card-img">
                    <img src="img/WhatsApp Image 2019-10-24 at 16.17.31.jpeg" alt="foto de perfil" class="profile-img">
                    <h1>Frederico Borges</h1>
                    <p class="job-tittle">Documentação de Software</p>
                    <p class="about">
                        Aluno do segundo semestre.
                    </p>
                    <a href="#" class="btn">Contato</a>
                    <ul class="social-media">
                        <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-google-plus-square"></i></a></li>
                    </ul>
                </div>

                <!-- RICARDO !-->

                <div class="card">
                    <img src="img/bg.jpg" alt="card-bg" class="card-img">
                    <img src="img/foto5.jpg" alt="foto de perfil" class="profile-img">
                    <h1>Ricardo Pereira Braga</h1>
                    <p class="job-tittle">Documentação de Software</p>
                    <p class="about">
                        Aluno do segundo semestre.
                    </p>
                    <a href="#" class="btn">Contato</a>
                    <ul class="social-media">
                        <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-google-plus-square"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    
</body>
</html>