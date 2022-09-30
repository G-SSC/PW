<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Inserir</title>
</head>
<body>
	<?php
		if (isset($_GET['cod']))
        {
			$cod = $_GET['cod'];

			$servidor = "localhost";
			$usuario = "root";
			$senha = "";
			$banco = "a2022_6_cardbox";

			$conn = new mysqli($servidor, $usuario, $senha, $banco);

		    if ($conn->connect_error) 
                {
			    die("Erro de conexão: " . $conn->connect_error);
			    } 

			$sql = "SELECT * FROM cardbox WHERE cod = ".$cod;
			$result = $conn->query($sql);

			if ($result->num_rows > 0) 
                {
				$linha = $result->fetch_assoc();

				$pagina = "alterar.php";
				$cod = $linha['cod'];
				$nome = $linha['nome'];
				$preco = $linha['preco'];
                $descricao = $linha['descricao'];
				$foto = $linha['imagens'];

			    }
                else
                    {
				    die('Cliente Inválido!');
			        }
		}else{
			$pagina = "inserir.php";
			$cod = "";
			$nome = "";
			$preco = "";
			$descricao = "";
			$foto = "R0lGODlhAQABAAAAACwAAAAAAQABAAA";
		}

		echo '<form action="'.$pagina.'" enctype="multipart/form-data" method="post">
		<input type="hidden" name="txtCod" value="'.$cod.'"/>
		Nome:<br/>
		<input type="text" name="txtNome" value="'.$nome.'"/><br/>
		Preco:<br/>
		<input type="text" name="txtPreco" value="'.$preco.'"/><br/>
		Descrição:<br/>
		<input type="text" name="txtDescricao" value="'.$descricao.'"/><br/>
		Selecione uma imagem:
		<img src="data:image/jpeg;base64,'.base64_encode($foto).'"/><br/>
		Selecione uma imagem: <input name="imagens" type="file" /><br/>
		<input type="submit"/>';
	?>
</body>
</html>