<?php
session_start();
?>
<html>
    <head>
              <title>
        Principal
        </title>
        <link rel="stylesheet" href="Style.css">
        <style>
        body
            {
            text-align:center;
            }
        h1
            {
            background-color:rgb(255, 250, 180);
            height: 100px;
            text-align:left;
            }
        h2
            {
            background-color:rgb(255, 250, 180);
            height: 50px;
            text-align:center;
            }
        </style>

        <meta charset = "utf-8">
    </head>
    <body> 
    <h1>Bem vindo a pagina principal, aqui você pode ir para seu perfil, para receitas ou fazer logout</h1>
      
        <br><br>
            <?php
            echo "<h2><a href = 004PW-pagPerfil.php>Perfil</a><br><br></h2> ";
            echo "<h2><a href = 004PW-pagReceitas.php>Receitas</a><br><br></h2> ";
            echo "<h2><a href = 004PW-pagLogout.php>Fazer Logout</a><br><br></h2> ";
            ?>
             <br></h2>

    </body>
</html>
