<?php
session_start();
?>
<html>
    <head>
        <title>
        Logout
        </title>
        <link rel="stylesheet" href="Style.css">
        <meta charset = "utf-8">
    </head>
    <body>    
        <br><br>
        <?php
		session_unset(); 
		session_destroy();
        header("Location:004PW-pagInicio.php ");
	    ?> 
    </body>
</html>
