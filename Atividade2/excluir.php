<?php
	$cod = $_GET["cod"];

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "a2022_6_cardbox";

	$conn = new mysqli($servidor, $usuario, $senha, $banco);

	if ($conn->connect_error) {
	    die("Erro de conexão: " . $conn->connect_error);
	} 

	$sql = "DELETE FROM cardbox WHERE cod = ".$cod;
	$conn->query($sql);

	$conn->close();

	header("location: index.php");
?>