<?php
    session_start(); 
      // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }
    
  // Tenta se conectar ao servidor MySQL
  $cx = mysqli_connect("mysql472.umbler.com", "autoesporte", "autoesporte1") or trigger_error(mysql_error());
  // Tenta se conectar a um banco de dados MySQL
  $db = mysqli_select_db($cx, "dbautoesporte");
   
  $usuario = mysqli_real_escape_string($_POST['usuario']);
  $senha = mysqli_real_escape_string($_POST['senha']);
    
  // Validação do usuário/senha digitados
  $sql = "SELECT `id`, `nome`, `niveis_acesso_id` FROM `usuarios` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
  $query = mysqli_query($sql);
  if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = mysqli_fetch_assoc($query);
  }
// 

if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // Salva os dados encontrados na variável $resultado
      $resultado = mysqli_fetch_assoc($query);
    
      // Se a sessão não existir, inicia uma
      if (!isset($_SESSION)) session_start();
    
      // Salva os dados encontrados na sessão
      $_SESSION['UsuarioID'] = $resultado['id'];
      $_SESSION['UsuarioNome'] = $resultado['nome'];
      $_SESSION['UsuarioNivel'] = $resultado['niveis_acesso_id'];
    
      // Redireciona o visitante
      header("Location: ../../cadastrar.html"); exit;
  }
?>
