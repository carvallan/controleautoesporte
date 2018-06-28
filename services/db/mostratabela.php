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
	echo "-----------------------------------------<br />";
	echo "Nome:".$aux["nome"]."<br />";
	echo "Idade:".$aux["contato"]."<br />";
  echo "Nome:".$aux["redesocial"]."<br />";
	echo "Idade:".$aux["carronegociado"]."<br />";
  echo "Nome:".$aux["detalhesdenegociacao"]."<br />";
	echo "Idade:".$aux["vendedor"]."<br />";
  echo "Nome:".$aux["loja"]."<br />";
	echo "Idade:".$aux["canal"]."<br />";
  echo "Nome:".$aux["status"]."<br />";

}
 
?>