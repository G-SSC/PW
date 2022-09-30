<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Produtos</title>
    <link rel="stylesheet" href ="style.css">
	<style>
	img
		{
		width:160px;
		height: 160px;
		}

	</style>
</head>
<body>
<header>
Seja Bem Vindo
</header>
<article>
	<?php
		$servidor = "localhost";
		$usuario = "root";
		$senha = "";
		$banco = "a2022_6_cardbox";

		$conn = new mysqli($servidor, $usuario, $senha, $banco);

		if ($conn->connect_error) {
		    die("Erro de conexão: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM cardbox";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
		while($linha = $result->fetch_assoc()) {
		    echo "	
			<div class='card'>
			<div class='container'>
			<img src='data:image/jpeg;base64,".base64_encode($linha["imagens"])."'/>
			 Objeto:"
			.$linha["nome"]."<br>
			Preço: ".$linha["preco"]."R$ <br>
			Descrição: ".$linha["descricao"]."
			<h2><a href='dados.php?cod=".$linha["cod"]."'><img src='alt.png' style='height:20px;width:20px'/></a></h2>
			<h2><a href='excluir.php?cod=".$linha["cod"]."'><img src='exc.png' style='height:20px;width:20px'/></a></h2>
		  	</div>
			</div>
		    ";
		    }
		}else{
			echo "Não há clientes cadastrados!";
		}
		$conn->close();
	?>
	<br>	
	<a href="dados.php">Inserir</a>
</article>
<footer>
	<p>Obrigado Pela Atenção</p>
</footer>
</body>
</html>