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
echo "<tbody>"
echo "<tr class="">\n";
echo "<td class="">".$aux['nome']."</td>\n";
echo "<td class="">".$aux['contato']."</td>\n";
echo "<td class="">".$aux['redesocial']."</td>\n";
echo "<td class="">".$aux['carronegociado']."</td>\n";
echo "<td>".$aux['detalhesdenegociacao']."</td>\n";
echo "<td>".$aux['vendedor']."</td>\n";
echo "<td>".$aux['loja']."</td>\n";
echo "<td>".$aux['canal']."</td>\n";
echo "<td>".$aux['status']."</td>\n";

echo "</tr>\n";

echo "</table>\n"; 


}
 
?>