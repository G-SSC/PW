<?php 
 session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles e imagens/style.css">
    <title>Le Boutique PW</title>
</head>

<body>
    <img src="styles e imagens/Le Boutique.png" class="icone">
    <div class="icon-tri"></div>
   

        <nav class="menu">   
        <a href="index.php">        <input type="button" value="Home page"> </a> 
            <a href="promosCatalog.php"><input type="button" value="Catálogo de promoções"> </a>
            <a href="sobreNos.php">     <input type="button" value="Sobre nós"> </a>
            <?php 
            if(!isset($_SESSION["username"])){
                echo
                '
                <a href="login.php"><input type="button" value="Login"> </a>
                ';
            }
            else {
                echo
                '
                <a href="sessions end.php"><input type="button" value="Log off"></a>
                ';
            }
            ?>
        </nav>
        
        <div class="about">
            O que é a Le Boutique?
        </div>

        <div class="us">
            <p>
                A Le Boutique é uma marca de roupas inexistente, criada para fazer
                um trabalho de uma tarefa de PW.
            </p>
            <p>
                A sua logo foi criada a partir de uma imagem aleatória de um torso que foi 
                modificada no photoshop para ficar condizente com a paleta de cores, e então
                foi adicionado um texto de fonte decorada abaixo do símbolo para servir de decoração. 
            <p>
                Vale ressaltar que o nome Le Boutique é genérico e usado por diversos negócios que são voltados à moda.
                Sendo assim, existem outras Le Boutiques, mas diferentemente desta, essas Le Boutiques são negócios reais.
            </p>
            <p>
                Contatos: nenhum, pois essa Le Boutique não existe.
            </p>
        </div>
    <footer></footer>
</body>
</html>