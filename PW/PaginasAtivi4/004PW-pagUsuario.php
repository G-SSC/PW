<html>
    <head>
        <title>
        Usuario
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
            height: 14
            text-align:center;
            }
        </style>

        <meta charset = "utf-8">
    </head>
    <body> 
    <h1>Seja bem vindo ao nosso site</h1>
      
        <br><br>  
        <h2><br>
            <?php
            session_start(); 
            echo "<a href =004PW-pagRegistro>Registro <br></a>";
            echo "<a href =004PW-pagLogin>Login </a>";
            ?>
             <br></h2>

    </body>
</html>
