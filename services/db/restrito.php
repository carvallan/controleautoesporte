<?php
@session_start();
if (isset($_SESSION['nome']) && isset($_SESSION['senha'])){
   $login_usuario = $_SESSION['nome'];
}
else {
   header("Location:login.php");
   exit();
}
?>
