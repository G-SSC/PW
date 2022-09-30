<?php 
  session_start(); 
?> 
<!DOCTYPE html> 
<html> 
	<body> 
	<?php // Mostrando as variáveis definidas na página anterior. 
		echo "O nome do usuário é " . $_SESSION["user"] . ".<br>"; 
		echo "A sua senha é " . $_SESSION["senha"] . ".". "<br><br><br> " ; 
		// Outra maneira de mostrar todos os valores de variáveis de uma sessão. 
		print_r($_SESSION);
	?> 
	</body> 
</html>