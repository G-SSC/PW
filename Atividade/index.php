<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Produtos</title>
</head>
<body>
	<?php
		$servidor = "localhost";
		$usuario = "root";
		$senha = "";
		$banco = "a2022_3_tabela";

		$conn = new mysqli($servidor, $usuario, $senha, $banco);

		if ($conn->connect_error) {
		    die("Erro de conexão: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM produtos";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			echo "<table border='1'>
			<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Preço</th>
            <th>Descrição</th>
			<th>Peso</th>
			<th>Altura</th>
            <th>Largura</th>
			<th>Comprimento</th>
			<th>Fabricante</th>
			</tr>";
		while($linha = $result->fetch_assoc()) {
		    echo "<tr>
		    <td>".$linha["cod"]."</td>
		    <td>".$linha["nome"]."</td>
		    <td>".$linha["preco"]."</td>
            <td>".$linha["descricao"]."</td>
            <td>".$linha["peso"]."</td>
            <td>".$linha["altura"]."</td>
            <td>".$linha["largura"]."</td>
            <td>".$linha["comprimento"]."</td>
            <td>".$linha["fabricante"]."</td>
		    <td><a href='dados.php?cod=".$linha["cod"]."'><img src='alt.png' style='height:20px;width:20px'/></a></td>
		    <td><a href='excluir.php?cod=".$linha["cod"]."'><img src='exc.png' style='height:20px;width:20px'/></a></td>
		    </tr>";
		    }
		    echo "</table>";
		}else{
			echo "Não há clientes cadastrados!";
		}
		$conn->close();
	?>
	<a href="dados.php">Inserir</a>
</body>
</html>