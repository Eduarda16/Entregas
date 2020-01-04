<!DOCTYPE HTML>

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale = 1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <meta name="description" content="Site de entregas, Sistema de entregas">
    <meta name="keywords" content="Entregas, Sistema">
    <meta name="author" content="Marcos Rafael e Maria Eduarda">
</head>

<body>

	<div class="header">
            <a href="index.php"><h2 class="logo">Entregas</h2></a>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
        </label>
        </div>
        <form method="post" action="gravarcliente.php" class="login-form" id="cadastro">
        <h1 class="p-login">Cadastrar Cliente</h1>

        <div class="txtb">
            <input type="text">
            <span data-placeholder="Nome completo"></span>
        </div>

        <div class="txtb">
            <input type="email">
            <span data-placeholder="E-mail"></span>
        </div>

        <div class="txtb">
            <input type="text">
            <span data-placeholder="CPF"></span>
        </div>

        <div class="txtb">
            <input type="text">
            <span data-placeholder="Endereço"></span>
        </div>

        <div class="txtb">
            <input type="text">
            <span data-placeholder="Telefone"></span>
        </div>

        <input type="submit" class="logbtn" value="Cadastrar-se">
        </form>
        

</body>
