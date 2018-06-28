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
    echo "<tbody />";
  echo "<tr />";
      echo "<td>".$aux["nome"]."</td />";
      echo "<td>".$aux["contato"]."</td />";
      echo "<td>".$aux["redesocial"]."</td />";
      echo "<td>".$aux["carronegociado"]."</td />";
      echo "<td>".$aux["detalhesdenegociacao"]."</td />";
      echo "<td>".$aux["vendedor"]."</td />";
      echo "<td>".$aux["loja"]."</td />";
      echo "<td>".$aux["canal"]."</td />";
      echo "<td>".$aux["status"]."</td />";
  echo "</tr />";
    echo "</tbody />";
  echo "</table />";
  
  
}
 
?>