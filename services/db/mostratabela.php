<?php
// Conexão ao banco

$link = mysqli_connect('mysql472.umbler.com','autoesporte','autoesporte1');

// Seleciona o Banco de dados através da conexão acima

$db = mysqli_select_db($link, "dbautoesporte");

$sql = "SELECT nome,contato,redesocial,carronegociado,detalhesdenegociacao,vendedor,loja,canal,status FROM clientes";

$consulta = mysqli_query($sql);


echo '<table>';

echo '<tr>';

echo '<td>Nome</td>';

echo '<td>Telefone</td>';

echo '<td>E-mail</td>';

echo '</tr>';

// Armazena os dados da consulta em um array associativo

while($registro = mysqli_fetch_assoc($consulta)){

echo '<tr>';

echo '<td>'.$registro["nome"].'</td>';

echo '<td>'.$registro["contato"].'</td>';

echo '<td>'.$registro["redesocial"].'</td>';

echo '<td>'.$registro["carronegociado"].'</td>';

echo '<td>'.$registro["detalhesdenegociacao"].'</td>';
  
echo '<td>'.$registro["vendedor"].'</td>';
  
echo '<td>'.$registro["loja"].'</td>';
  
echo '<td>'.$registro["canal"].'</td>';  
  
echo '<td>'.$registro["status"].'</td>';  

echo '</tr>';

}

echo '</table>';

}

?>

