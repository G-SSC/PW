<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ativipw005";
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<html>
    <head>
        <title>
        Perfil
        </title>
        <link rel="stylesheet" href="Style.css">
        <style>     
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
        <h1>Bem vindo <?php echo $_SESSION["usuario"] . ".<br>";?> </h1>
        <br><br>
        <?php
        if (!$conn) 
            { 
            die("Falha de Conexão: " . mysqli_connect_error());
            }
        echo "Conectado com Sucesso <br /><br />";      
        $sql = "SELECT * FROM usuario";
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) 
            { 
            while($row = $result->fetch_assoc()) 
                {
                echo "usuario número: " . $row["codusu"]." de nome ". $row["nome"]." e email ". $row["email"].""."<br><br>";
                }
            } 
        else 
            {
            echo "0 results";
            }
        $conn->close();
        echo "<br />Conexão Encerrada<br>";
        if($_SESSION['validacao']=="1") 
            {
            echo "<a href =004PW-pagPrincipal.php>Voltar <br></a>";
            }
        else
            {
            header("Location:004PW-pagInicio.php ");
            }
        ?>
        <br></h2>
    </body>
</html>
