<?php
$host = "mysql472.umbler.com"; //Servidor do mysql
$user = "autoesporte"; //Usuario do banco de dados
$senha = "autoesporte1"; //senha do banco de dados
$db = "dbautoesporte"; //banco de dados


mysqli_connect($host, $user, $senha) or die (mysqli_error());
mysqli_select_db($db) or die (mysqli_error()); 
?>
