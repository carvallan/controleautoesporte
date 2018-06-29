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

  echo "<table class="table table-hover bg-light"/>";
   echo "<thead>"
      echo "<tr>"
        echo  "<th scope="col">"Modelo"</th>"
       echo "<th scope="col"/>"Marca"</th>"
       echo "<th scope="col"/>"Versão"</th>"
         echo "<th scope="col"/>"Ano"</th>"
       echo "<th scope="col"/>"Motor"</th>"
      echo  "<th scope="col"/>"Nome"</th>"
        echo "<th scope="col"/>"Telefone"</th>"
        echo "<th scope="col"/>"Detalhes da Negociação"</th>"
        echo "<th scope="col"/>"Valor pré negociado"</th>"
      echo "</tr/>"
    echo "</thead/>"
    echo "<tbody />";
  echo "<tr />";
      echo "<td class="">".$aux["nome"]."</td /><br />";
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
