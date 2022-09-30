   <?php
	//se o usuário e a senha digitados estiverem corretos ...
	if ($_POST['usuario'] == "user" && $_POST['password'] == "123")
		  {
		  //criação e inicialização da variável $validacao como 1 
		   $validacao = "1"; //Essa variável verifica se o usuário esta logado (valor = 1)
		   $usuario = $_POST['usuario']; // puxa o nome do usuário e a senha digitados no... 
		   $password = $_POST['password'];  // ...formulario do inicial.php
			  
			//inicio da Sessao 
			session_start();
			//Gravação das informações das variáveis dentro da sessão
			$_SESSION['validacao'] = $validacao;
			$_SESSION['usuario'] = $usuario;
			$_SESSION['password'] = $password;

			//Redirecionamento do usuário para as páginas restritas
			header("Location: restrita.php");
		 }
	else  //senao
		{
	//exiba um alerta dizendo que a senha esta errada
   ?>       
		<script type="text/javascript">
		   alert("Login ou senha incorreta");
		</script>

		<?php
		   echo"<a href=inicial.php>INICIO </a> <br /><br />
		        <a href=restrita.php> RESTRITA </a> <br /><br />
		        <a href=restrita_1.php> RESTRITA_1 </a><br /><br />
				<a href=liberada.php> LIBERADA </a><br /><br />
		        <a href=deslogar.php>SAIR</a>";
	   } 
        ?>
