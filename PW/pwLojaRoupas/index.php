<?php 
 session_start();
 include("arraysFuncoes.php");
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

        <?php
        inicializacao();
        ?>
    </main>
    <footer></footer>

    <script type="text/javascript">
    var qtprod = '<?= sizeof($produtos); ?>'

    alert(qtprod) 

    var produtos = JSON.parse('<?= json_encode($produtos); ?>')
    alert(produtos[6].thumb)

    const verMais = () => {

       var botaoVerMais = document.querySelector("#BTN_verMais")
           
        for(i = 8; i < qtprod + 4; i++){
    
            sec = document.createElement('section')
            sec.setAttribute('class','produto')
            sec.setAttribute('id', produtos[i].nomes)
    
            var conteudo = 
            `
            <a href='produto.php'>
            <section class = 'produto' id = '${produtos[i].nome}'>
    
            <div>
                <img src='${produtos[i].thumb}'>
            </div>
    
            <div>
                <span>
                    ${produtos[i].nome}
                </span>
            </div>
    
            <div>
                <span>
                    R$: ${produtos[i].preco}
                </span>
            </div>
    
            </section>
            </a>
           `
            sec.innerHTML = conteudo
            
            container.insertBefore(sec, botaoVerMais)
            if (produtos.length  == qtdProdutos || produtos.length < qtdProdutos) {
                alert("ava")
            }
        }
    }

</script>
</body>
</html>