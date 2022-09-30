<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ativipw005";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) 
        {
        die("Falha de Conexão: " . mysqli_connect_error());
        }
    echo "Conectado com Sucesso <br /><br />";
    $sql = "insert into usuario values 
    ('1','Felip', 'fellips@outlook.com', 'beijin',null),
    ('2','Andressa', 'and_aalmeida@outlook.com', 'b345032tgfd',11991125632),
    ('3','Rafael', 'rafinhagamer00412@gmail.com', '25022000RaRafs',null),
    ('4','Jhon', 'jhotarobr@gmail.com', 'jhonsilva1989',null),
    ('5','Rafaela', 'rafaelaalmedidadias@outlook.com', 'rafinha203040',null)";
  
    if (mysqli_query($conn, $sql)) 
        {
        echo "Novo registro inserido com sucesso <br /><br />";
        } 
    else 
        {
        echo "Error: " . $sql . "<br>" . $conn->error . "<br />";
        }
    $conn->close();
    echo "Conexão Encerrada";
?>
<html>
    <head>
        <title>
        Registro
        </title>
        <link rel="stylesheet" href="Style.css">

        <meta charset = "utf-8">
    </head>
    <body> 
    <h1>Essa pagina ainda não está funcionando</h1>
      
        <br><br>  
        <h2><br>
            <?php
            $_SESSION["usuario"] = "Gustavo"; 
			$_SESSION["senha"] = "123"; 
            echo "<a href =004PW-pagInicio.php>Voltar</a>";
            ?>
             <br></h2>

    </body>
</html>
<?php
