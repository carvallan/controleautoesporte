<?php
// Conexão ao banco

$link = mysqli_connect('mysql472.umbler.com','autoesporte','autoesporte1'); or die(mysql_error());

// Seleciona o Banco de dados através da conexão acima

$conexao = mysqli_select_db('dbautoesporte', $link); 

if($conexao){

$sql = "SELECT nome,contato,redesocial,carronegociado,detalhesdenegociacao,vendedor,loja,canal,status FROM clientes";

$consulta = mysqli_query($sql);

echo '<table>';

echo '<tr>';

echo '<td>Nome</td>';

echo '<td>contato</td>';

echo '<td>E-mail</td>';
  
echo '<td>redesocial</td>';
  
echo '<td>carronegociado</td>';
  
echo '<td>detalhesdenegociacao</td>';
  
echo '<td>vendedor</td>';
    
echo '<td>loja</td>';
      
echo '<td>canal</td>';
  

echo '</tr>';

// Armazena os dados da consulta em um array associativo

while($registro = mysql_fetch_assoc($consulta)){

echo '<tr>';

echo '<td>'.$registro["nome"].'</td>';

echo '<td>'.$registro["contato"].'</td>';

echo '<td>'.$registro["redesocial"].'</td>';

echo '<td>'.$registro["carronegociado"].'</td>';

echo '<td>'.$registro["detalhesdenegociacao"].'</td>';
  
echo '<td>'.$registro["vendedor"].'</td>';
  
echo '<td>'.$registro["loja"].'</td>';
  
echo '<td>'.$registro["canal"].'</td>';  
  

echo '</tr>';

}

echo '</table>';

}

?>