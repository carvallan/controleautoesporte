<?php
 
//iniciando a conexão com o banco de dados
$cx = mysqli_connect("mysql472.umbler.com", "autoesporte", "autoesporte1");
 
//selecionando o banco de dados
$db = mysqli_select_db($cx, "dbautoesporte");
 
//criando a query de consulta à tabela criada
$sql = mysqli_query($cx, "SELECT * FROM clientes") or die(
	mysqli_error($cx) //caso haja um erro na consulta
);

?>
<!doctype html>
<html>
  <body>
    

   <?php while ($aux = mysqli_fetch_assoc($sql)): ?>
    <table>
    <tbody >
  <tr >
     <td><?php echo $clientes['name'] ?></td >
      <td><?php echo $clientes['contato'] ?></td >
      <td><?php echo $clientes['redesocial'] ?></td >
      <td><?php echo $clientes['carronegociado'] ?></td >
  </tr >
   </tbody>
  </table>
      </body>
</html>