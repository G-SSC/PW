<?php // Start da sessão. 
   session_start(); 
?> <!DOCTYPE html> 
<html> 
	<body> 
		<?php // Setando as variáveis da sessão. 
		    $_SESSION["user"] = "usuario"; 
			$_SESSION["senha"] = "123"; 
			echo "As Variáveis da sessão estão definidas."; 
		?> 
	</body> 
</html>