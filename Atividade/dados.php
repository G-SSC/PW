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
			$banco = "a2022_3_tabela";

			$conn = new mysqli($servidor, $usuario, $senha, $banco);

		    if ($conn->connect_error) 
                {
			    die("Erro de conexão: " . $conn->connect_error);
			    } 

			$sql = "SELECT * FROM produtos WHERE cod = ".$cod;
			$result = $conn->query($sql);

			if ($result->num_rows > 0) 
                {
				$linha = $result->fetch_assoc();

				$pagina = "alterar.php";
				$cod = $linha['cod'];
				$nome = $linha['nome'];
				$preco = $linha['preco'];
                $descricao = $linha['descricao'];
                $peso = $linha['peso'];
                $altura = $linha['altura'];
                $largura = $linha['largura'];
                $comprimento = $linha['comprimento'];
                $fabricante = $linha['fabricante'];
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
			$peso = "";
			$altura = "";
			$largura = "";
			$comprimento = "";
			$fabricante = "";
		}

		echo '<form action="'.$pagina.'" method="post">
		<input type="hidden" name="txtCod" value="'.$cod.'"/>
		Nome:<br/>
		<input type="text" name="txtNome" value="'.$nome.'"/><br/>
		Preco:<br/>
		<input type="text" name="txtPreco" value="'.$preco.'"/><br/>
		Descrição:<br/>
		<input type="text" name="txtDescricao" value="'.$descricao.'"/><br/>
		Peso:<br/>
		<input type="text" name="txtPeso" value="'.$peso.'"/><br/>
		Altura:<br/>
		<input type="text" name="txtAltura" value="'.$altura.'"/><br/>
		Largura:<br/>
		<input type="text" name="txtLargura" value="'.$largura.'"/><br/>
		Comprimento:<br/>
		<input type="text" name="txtComprimento" value="'.$comprimento.'"/><br/>
		Fabricante:<br/>
		<input type="text" name="txtFabricante" value="'.$fabricante.'"/><br/>
		<input type="submit"/>'
	?>
</body>
</html>