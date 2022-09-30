<?php 
  session_start(); 
?> 
<!DOCTYPE html> 
<html> 
	<body> 
	<?php 
		// Para alterar o valor de uma variável de sessão basta substitui-la. 
		$_SESSION["user"] = "outro_usuario"; 
		print_r($_SESSION);
	?> 
	</body> 
</html>