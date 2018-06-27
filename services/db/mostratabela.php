<?php
 
//Conexão e consulta ao Mysql
mysql_connect('mysql472.umbler.com','autoesporte','autoesporte1') or die(mysql_error());
mysql_select_db('mysql') or die(mysql_error());
$qry = mysql_query("select nome as nome, contato as contato from clientes");
 
//Pegando os nomes dos campos
$num_fields = mysql_num_fields($qry);//Obtém o número de campos do resultado
 
for($i = 0;$i<$num_fields; $i++){//Pega o nome dos campos
	$fields[] = mysql_field_name($qry,$i);
}
 
//Montando o cabeçalho da tabela
$table = '<table border="1"><tr>';
 
for($i = 0;$i < $num_fields; $i++){
	$table .= '<th>'.$fields[$i].'</th>';
}
 
//Montando o corpo da tabela
$table .= '<tbody>';
while($r = mysql_fetch_array($qry)){
	$table .= '<tr>';
	for($i = 0;$i < $num_fields; $i++){
		$table .= '<td>'.$r[$fields[$i]].'</td>';
	}
	$table .= '</tr>';
}
 
//Finalizando a tabela
$table .= '</tbody></table>';
 
//Imprimindo a tabela
echo $table;
 
?>