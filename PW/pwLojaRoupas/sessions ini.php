<?php

session_start();

    $_SESSION["username"] = $_POST["user"];
    $_SESSION["password"] = $_POST["passwort"];
 
header('Location: index.php');
