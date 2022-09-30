<?php
session_start();
if($_SESSION['validacao']=="1")
    { 
?>
<html>
    <head>
        <title>
        Receitas
        </title>
        <link rel="stylesheet" href="Style.css">
        <style>
        h1
            {
            background-color:rgb(255, 250, 180);
            height: 70px;
            text-align:left;
            }
        h2
            {
            background-color:rgb(255, 250, 180);
            text-align:center;
            }
        </style>

        <meta charset = "utf-8">
    </head>
    <body> 
    <h1>Ainda não temos Receitas</h1>
      
        <br><br>
            <?php
            echo "<a href =004PW-pagPrincipal.php>Voltar <br></a>";
            }
            else
                {
                header("Location:004PW-pagInicio.php ");
                }
            ?>
            <br>
    </body>
</html>
