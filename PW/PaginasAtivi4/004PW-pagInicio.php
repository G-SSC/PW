<?php
session_start();
?>
<html>
    <head>
        <title>
        Inicio
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
            height: 70px;
            text-align:left;
            }
        h2
            {
            background-color:rgb(255, 250, 180);
            height: 320;
            text-align:center;
            }
        </style>

        <meta charset = "utf-8">
    </head>
    <body> 
    <h1>Seja bem vindo ao nosso site</h1>
      <form action = "004PW-pagSenha.php" method = "POST">
      <h1>Digite o usuario e a senha para acessar as outras paginas ou faça o registro</h1> 
      <h2>
      Usuario:<br><input name = "usuario" type = "text" size = "30"><br>
      Senha:<br><input name = "password" type = "password" size = "30"><br><br>
      <input name = "enviar" type = "submit" id ="enviar" value = "enviar"><br><br>
      <a href =004PW-pagRegistro.php>Registro <br></a>
      </align>
      </h2>
    </body>
</html>
