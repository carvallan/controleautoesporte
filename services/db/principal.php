<?php
include("config.php");
include("restrito.php");

$sql_busca = "SELECT * FROM usuarios WHERE nome = '$nome_usuario'";
$exe_busca = mysqli_query($sql_busca) or die (mysqli_error());
$fet_busca = mysqli_fetch_assoc($exe_busca);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
Olá <? echo $fet_busca['nome'];?>
</body>
</html>
