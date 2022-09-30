<?php

$host   = "localhost";
$user   = "root";
$senha  = "g30rgi4C4r0lBi4";
$banco  = "roupas";

$conn = new mysqli($host, $user, $senha, $banco);

if($conn->connect_errno) {
    die('Não foi possível conectar ao banco de dados');
}
