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
?>
<html>
  <table >
    
   <tbody >
  <tr >
     <td><?php echo $aux["nome"] ; ?></td >
      <td><?php echo $aux["contato"] ; ?></td >
      <td><?php echo $aux["redesocial"] ; ?></td>
      <td><?php echo $aux["carronegociado"] ; ?></td >
      <td><?php echo $aux["detalhesdenegociacao"] ; ?></td >
       <td><?php echo $aux["vendedor"] ;?></td >
     <td><?php echo $aux["loja"] ; ?></td >
       <td><?php echo $aux["canal"] ; ?></td >
       <td><?php echo $aux["status"] ; ?></td >
   </tr >
     </tbody >
   </table > 

</html>
 
<?php }?>
