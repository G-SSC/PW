<?php 
  session_start(); 
?> 
<!DOCTYPE html> 
<html> 
	<body> 
	<?php 
		// remove todas as variáveis da sessão. 
		session_unset(); 
		// destrói toda a sessão. 
		session_destroy();
	?> 
	</body> 
</html>