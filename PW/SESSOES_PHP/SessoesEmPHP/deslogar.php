<?php 
//Inicio da sessão
session_start(); 
echo "Até mais ". $_SESSION["usuario"] ." Obrigado pela visita <br />";

//DESTRÓI AS SESSOES
session_destroy(); 

//REDIRECIONA PARA A TELA DE LOGIN 
  echo "<a href=inicial.php>INICIO</a>"; 
?> 