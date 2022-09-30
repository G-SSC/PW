<?php
	$nome = $_POST["txtNome"];
    $preco = $_POST['txtPreco'];
    $descricao = $_POST['txtDescricao'];

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "a2022_6_cardbox";

	$foto = addslashes(file_get_contents($_FILES['imagens']['tmp_name']));

	$conn = new mysqli($servidor, $usuario, $senha, $banco);

	if ($conn->connect_error) 
		{
	    die("Erro de conexão: " . $conn->connect_error);
		} 

	$sql = "INSERT INTO cardbox VALUES (NULL, '$nome', '$preco', '$descricao', '$foto');";
	$conn->query($sql);

	$conn->close();

	header("location: index.php");
?>