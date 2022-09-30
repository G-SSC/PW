<?php
	//Inicio da sessão
	 session_start();

	//Verificaçao de o usuario esta logado ou não
	if ($_SESSION['validacao'] == "1") {
?>
	<!DOCTYPE >
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Pagina Restrita</title>
		</head>
		<body>
			Seja bem vindo <b><?php echo $_SESSION["usuario"]; ?></b> a Pagina restrita

			<br/> <br /> <br /> 
			 <?php	 
			   echo"<a href=inicial.php>INICIO </a> <br /><br />
					<a href=restrita.php> RESTRITA </a> <br /><br />
					<a href=restrita_1.php> RESTRITA_1 </a><br /><br />
					<a href=liberada.php> LIBERADA </a><br /><br />
					<a href=deslogar.php>SAIR</a>";
			 ?>	
		</body>
	</html>
    <?php
    } else {
		//exiba um alerta dizendo que a senha esta errada
		echo "Acesso Negado <br /><a href=inicial.php>VOLTAR</a>";
		}
     ?>
	
