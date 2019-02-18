<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="public/estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script type="text/javascript" src="public/validar.js"></script>
</head>

<body>
<div class="logo"><img src="public/bandeira_mugiwara.jpg"></div>

<header class="header">
    <i class="fas fa-user-cog"></i>Controle
</header>
<nav class="nav" id="nav">
			<a href="index.php" class="active"><i class="fas fa-home"></i>Home</a>
			<a href="index.php?link=2"><i class="far fa-address-card"></i>Cadastrar</a>

</nav>
<main class="main">
    <?php

    $link = @$_GET["link"];

    $pag[2] = "cadastrar.php";
    $pag[3] = "main.php";
    $pag[4] = "editar.php";
    $pag[5] = "consulta.php";



    if(!empty($link)){
    if(file_exists($pag[$link])){
        include $pag[$link]; 
    }
    } else {
        include $pag[3];
    }


		
    ?>
</main>
<footer class="footer"><p>Developed by @lproencio</p><i class="fas fa-yin-yang"></i></footer>
    
</body>
</html>