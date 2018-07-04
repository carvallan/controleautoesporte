<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/mainlogin.css">
</head>

<body>


  <form class="form-signin" method="POST" action="validalogin.php">
      <h2>Área restrita!</h2>
    <div class="text-center mb-4">
      <img class="mb-4 mt-5" src="https://i.imgur.com/0PLuszm.png" alt="" width="200vw" height="100vw">
    </div>

    <div class="form-label-group">
      <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Digite seu Usuário" required="" autofocus>
      <label for="inputEmail">Usuário</label>
    </div>

    <div class="form-label-group">
      <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha" required="">
      <label for="inputPassword">Senha</label>
    </div>

    <button class="btn btn-lg btn-success btn-block" type="submit" name="btnLogin">Entrar</button>
  </form>
          <p>
            <?php if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        </p>
        <p>
            <?php 
            if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
        </p>

</body>

</html>