<?php
// Conexão ao banco

$link = mysql_connect('mysql472.umbler.com','autoesporte','autoesporte1');

// Seleciona o Banco de dados através da conexão acima

$conexao = mysql_select_db('dbautoesporte',$link); if($conexao){

$sql = "SELECT nome,contato,redesocial,carronegociado,detalhesdenegociacao,vendedor,loja,canal,status FROM clientes";

$consulta = mysql_query($sql);

echo '<table>';

echo '<tr>';

echo '<td>Nome</td>';

echo '<td>Telefone</td>';

echo '<td>E-mail</td>';

echo '</tr>';

// Armazena os dados da consulta em um array associativo

while($registro = mysql_fetch_assoc($consulta)){

echo '<tr>';

echo '<td>'.$registro["nome"].'</td>';

echo '<td>'.$registro["telefone"].'</td>';

echo '<td>'.$registro["email"].'</td>';

echo '</tr>';

}

echo '</table>';

}

?>