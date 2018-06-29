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
  echo "<table />";  
    echo "<tbody />";
  echo "<tr />";
      echo "<td>".$aux["nome"]."</td /><br />";
      echo "<td>".$aux["contato"]."</td /><br />";
      echo "<td>".$aux["redesocial"]."</td /><br />";
      echo "<td>".$aux["carronegociado"]."</td /><br />";
      echo "<td>".$aux["detalhesdenegociacao"]."</td /><br />";
      echo "<td>".$aux["vendedor"]."</td /><br />";
      echo "<td>".$aux["loja"]."</td /><br />";
      echo "<td>".$aux["canal"]."</td /><br />";
      echo "<td>".$aux["status"]."</td /><br />";
  echo "</tr />";
    echo "</tbody />";
  echo "</table />";  

}
 
?>
