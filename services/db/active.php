<?php
include("config.php");

if (isset($_GET['ac'])){
   $sessao = $_GET['ac'];
   
   $sql_busca = "SELECT * FROM usuarios WHERE nome = '$nome'";
   $exe_busca = mysqli_query($sql_busca) or die (mysqli_error());
   $num_busca = mysqli_num_rows($exe_busca);
   
   if ($num_busca > 0){
      $sql_up = "UPDATE user SET activo = 'S' WHERE nome = '$nome'";
	  $exe_up = mysqli_query($sql_up) or die (mysqli_error());
   }
   else {
      echo "Esse usuario não pode ser ativado.";
   }
}
?>
