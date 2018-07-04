<?php
$host = "mysql472.umbler.com"; //Servidor do mysql
$user = "autoesporte"; //Usuario do banco de dados
$senha = "autoesporte1"; //senha do banco de dados
$db = "dbautoesporte"; //banco de dados


$cx = mysqli_connect($host, $user, $senha);
mysqli_select_db($cx, $db) or die (mysqli_error()); 
?>
