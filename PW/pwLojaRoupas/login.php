<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Boutique</title>
    <link rel="stylesheet" href="styles e imagens/style.css">
</head>
<body>
<img src="styles e imagens/Le Boutique.png" class="icone">
    <main class="loginContainer"> 

        <nav class="menu">   
            <a href="index.php">        <input type="button" value="Home page"> </a> 
            <a href="promosCatalog.php"><input type="button" value="Catálogo de promoções"> </a>
            <a href="sobreNos.php">     <input type="button" value="Sobre nós"> </a>
        </nav>
        
        <section class="inputs-Container">
           <form action="sessions ini.php" method="POST">
                <div class="loginInp">
                    <input type="text" name="user" id="user" 
                    placeholder="Digite o seu nome de usuário" required>
                </div>
            
                <div class="loginInp">
                    <input type="text" name="passwort" id="passwort"
                    placeholder="Digite a senha" required>
                </div>

                <div class="loginInp">
                    <input type="submit" name="submit"
                    value="Conectar">
                </div>
            </form> 
        </section>
    </main>
    <footer></footer>
</body>
</html>