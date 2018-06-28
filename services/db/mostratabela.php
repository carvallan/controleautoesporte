<?php
 
//iniciando a conexão com o banco de dados
$cx = mysqli_connect("mysql472.umbler.com", "autoesporte", "autoesporte1");
 
//selecionando o banco de dados
$db = mysqli_select_db($cx, "dbautoesporte");
 
//criando a query de consulta à tabela criada
$sql = mysqli_query($cx, "SELECT * FROM clientes") or die(
	mysqli_error($cx) //caso haja um erro na consulta
);
 
//pecorrendo os registros da consulta.
while($aux = mysqli_fetch_assoc($sql))
{
	echo "<table>";
  echo "<tbody>"
	echo "<tr>".$aux["nome"]."</tr>",
	echo "<tr>".$aux["contato"]."</tr>",
  echo "<tr>".$aux["redesocial"]."</tr>",
	echo "<tr>".$aux["carronegociado"]."</tr>",
  echo "<tr>".$aux["detalhesdenegociacao"]."</tr>",
	echo "<tr>".$aux["vendedor"]."</tr>",
  echo "<tr>".$aux["loja"]."</tr>",
	echo "<tr>".$aux["canal"]."</tr>",
  echo "<tr>".$aux["status"]."</tr>",
  echo "</tbody>",
  echo "</table>";
}
 
?>