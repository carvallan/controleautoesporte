<?php
 
//iniciando a conexão com o banco de dados
$cx = mysqli_connect("mysql472.umbler.com", "autoesporte", "autoesporte1");
 
//selecionando o banco de dados
$db = mysqli_select_db($cx, "dbautoesporte");
 
//criando a query de consulta à tabela criada
$sql = mysqli_query($cx, "SELECT * FROM clientes") or die(
	mysqli_error($cx) //caso haja um erro na consulta
);
 
  <thead>
    <tr>
      <th scope="col">Modelo</th>
        <th scope="col">Marca</th>
        <th scope="col">Versão</th>
         <th scope="col">Ano</th>
        <th scope="col">Motor</th>
        <th scope="col">Nome</th>
        <th scope="col">Telefone</th>
         <th scope="col">Detalhes da Negociação</th>
        <th scope="col">Valor pré negociado</th>
    </tr>
   </thead>
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