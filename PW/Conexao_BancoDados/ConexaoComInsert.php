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

 $sql = "INSERT INTO Cad_fun (codfun, nome, depto, função, salario)
VALUES ('12','Sergio', 'desenvolvimento', 'programador', 14000.00)";

if (mysqli_query($conn, $sql)) {
  echo "Novo registro inserido com sucesso <br /><br />";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error . "<br />";
}

// Fechamento da conexão
$conn->close();
echo "Conexão Encerrada";
?>

