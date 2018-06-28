<?php
// Conexão ao banco

$pdo = new PDO("mysql:host=mysql472.umbler.com", "autoesporte", "autoesporte1", array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                PDO::ATTR_PERSISTENT => false,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            )
        );

// Seleciona o Banco de dados através da conexão acima

$conexao = mysql_select_db('dbautoesporte',$pdo); if($conexao){

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