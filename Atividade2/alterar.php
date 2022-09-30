<?php
	$cod = $_POST["txtCod"];
	$nome = $_POST["txtNome"];
    $preco = $_POST['txtPreco'];
    $descricao = $_POST['txtDescricao'];
	
	$foto = addslashes(file_get_contents($_FILES['imagens']['tmp_name']));

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "a2022_6_cardbox";

	$conn = new mysqli($servidor, $usuario, $senha, $banco);

	if ($conn->connect_error) {
	    die("Erro de conexão: " . $conn->connect_error);
	} 

    $sql = "UPDATE cardbox SET nome = '$nome', preco = '$preco',descricao = '$descricao',imagens = '$foto' WHERE cod = ".$cod;	
    $conn->query($sql);
	$conn->close();

	header("location: index.php");
?>