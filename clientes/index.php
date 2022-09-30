<!DOCTYPE html>
<html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    <Style>
        title,tr,th
            {
            border: 1px solid black;
            }
     </Style>
 </head>
 <body>
    <?php
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "clientes";
        $conn = new mysqli($servidor,$usuario,$senha,$banco);

        if ($conn->connect_error) 
	        { 
  	        die("Falha de Conexão: " . $conn->connect_error);
	        }
	    echo "Conectado com Sucesso <br /><br />";
	
        $sql = "SELECT * FROM clientes";
        $result = $conn ->query($sql);
        if($result ->num_rows > 0)
            {
            echo"<table>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Endereço</th>";
                while($linha = $result -> fetch_assoc())
                    {
                        echo "<tr>
                        <td>".$linha["cod"]."</td>
                        <td>".$linha["nome"]."</td>
                        <td>".$linha["endereco"]."</td>
                        <td><a href='dados.php?cod=".$linha["cod"]."'>Alterar</a></td>
                        <td><a href='excluir.php?cod=".$linha["cod"]."'>Excluir</a></td>
                        </tr>";
                    }
                echo "</table>";
            }

        // Fechamento da conexão
        function fechar()
	        {
	        $conn->close();
	        echo "<br />Conexão Encerrada";
	        }
    ?>  
    <a href="dados.php">Inserir</a>
 </body>
</html>