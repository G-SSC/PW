<?php
	$cod = $_POST["txtCod"];
	$nome = $_POST["txtNome"];
    $preco = $_POST['txtPreco'];
    $descricao = $_POST['txtDescricao'];
    $peso = $_POST['txtPeso'];
    $altura = $_POST['txtAltura'];
    $largura = $_POST['txtLargura'];
    $comprimento = $_POST['txtComprimento'];
    $fabricante = $_POST['txtFabricante'];

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "a2022_3_tabela";

	$conn = new mysqli($servidor, $usuario, $senha, $banco);

	if ($conn->connect_error) {
	    die("Erro de conexão: " . $conn->connect_error);
	} 

    $sql = "UPDATE produtos SET nome = '$nome', preco = '$preco',descricao = '$descricao', peso = '$peso', altura = '$altura', largura = '$largura', comprimento = '$comprimento', fabricante = '$fabricante' WHERE cod = ".$cod;	
    $conn->query($sql);
	$conn->close();

	header("location: index.php");
?>