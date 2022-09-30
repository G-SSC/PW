<?php
session_start();
?>
<!DOCTYPE html> 
<html>
    <head>
        <title>Pagina sem login</title>
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
    </head>
    <body>
    <?php
    if ($_POST["usuario"]== "Gustavo" && $_POST["password"] == "123")
        {
        $validacao = "1";
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
           
        session_start();
           
        $_SESSION['validacao'] =  $validacao;
        $_SESSION['usuario'] =  $usuario;
        $_SESSION['password'] =  $password;
        header("Location:004PW-pagPrincipal.php ");
        }
    else
    
        {
    ?>
        <script type = "text/javascript">
        alert("Login ou senha incorretos");
        </script>
        <h2>Sua senha ou Login deram erro, acesse uma das opções abaixo</h2>
    <?php
        echo "<h2><a href = 004PW-pagInicio.php>Login</a><br><br></h2> ";
        echo "<h2><a href = 004PW-pagRegistro.php>Registro</a><br><br></h2> ";
        
        }
    ?>
    </body>
</html>