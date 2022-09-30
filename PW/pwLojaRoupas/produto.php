<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Boutique</title>
    <link rel="stylesheet" href="styles e imagens/style.css">
</head>
<!-- 

     inicialmente essa página era para mostrar o produto, o preco e etc.
     eu tentei fazer ela funcionar, mas simplesmente nao consegui.
     na proxima etapa deste trabalho eu ja terei arrumado isso.
     
-->
<body>
    <img src="styles e imagens/Le Boutique.png" class="icone">
    <div class="icon-tri"></div>
    <main class="container"> 
        
        <nav class="menu">   
            <a href="index.php">        <input type="button" value="Home page"> </a> 
            <a href="promosCatalog.php"><input type="button" value="Catálogo de promoções"> </a>
            <a href="sobreNos.php">     <input type="button" value="Sobre nós"> </a>

            <?php 
            if(!isset($_SESSION["username"])){
                echo
                '
                <a href="login.php"><input type="button" value="Login"> </a>
                </nav>
                Os produtos só podem ser visualizados por clientes cadastrados.'; 
            }
            else {
                echo
                '
                <a href="sessions end.php"><input type="button" value="Log off"></a>
                </nav> 
                <div id="indisponivel">
                <p>Infelizmente, o produto solicitado não está disponível em nosso estoque.</p>
                <p>E continuará assim pois, assim como já deve saber, esta loja não existe.</p>
                <p>~ Assinado: A gerência inexistente.</p>
                </div>
                ';
            }
            ?>

       

    </main>
    <footer>Leia os comentários</footer>
</body>
</html>