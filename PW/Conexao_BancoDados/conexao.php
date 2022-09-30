<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testes";


// Criação da conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificação da conexão
if (!$conn) { // Se "não" acontecer a conexão( o "!" nega a condição 
  die("Falha de Conexão: " . mysqli_connect_error());
}
echo "Conectado com Sucesso <br /><br />";

 
// Fechamento da conexão
$conn->close();
echo "Conexão Encerrada";
?>

