<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ativipw005";

// Criação da conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificação da conexão
if (!$conn) { // Se "não" acontecer a conexão( o "!" nega a condição 
  die("Falha de Conexão: " . mysqli_connect_error());
}
echo "Conectado com Sucesso <br /><br />";

 $sql = "SELECT * FROM cad_fun";
 $result = $conn->query($sql); 

if ($result->num_rows > 0) { /* função num_rows()verifica se há mais de zero linhas 
                               retornadas. */							 
/* Campos de saida de cada linha. O while() percorre o conjunto de resultados e gera 
   os dados das colunas da tabela */
  while($row = $result->fetch_assoc()) {/* Função fetch_assoc()coloca todos os 
          resultados em uma matriz associativa pela qual podemos fazer um loop */
    echo "Cod_Func: " . $row["codfun"]. " | Nome do Func: " . $row["nome"]. " | Departamento: " 
	     . $row["depto"]. " | Função: " .  $row["função"] . " | Salario" . $row["salario"] . "<br />";
  }
} else {
  echo "0 results";
}
 

// Fechamento da conexão
$conn->close();
echo "<br />Conexão Encerrada";
?>

