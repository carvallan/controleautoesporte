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

  <html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mainindex.css">
  </head>

  <body>
    <div class="bg-success">
      <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <a class="navbar-brand" href="index.html"><img src="https://i.imgur.com/0PLuszm.png" alt="logo" width="100" height="40"></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="../../index.html">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../login.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/services/db/mostratabela.php">Lista de Contatos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../intermediacao.html">Lista de Intermediações</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Sair</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
        </div>
      </nav>
    </div>
    <table class="table table-hover bg-light">
      <thead>

        <tr>
          <th scope="col">Modelo</th>
          <th scope="col">Marca</th>
          <th scope="col">Versão</th>
          <th scope="col">Ano</th>
          <th scope="col">Motor</th>
          <th scope="col">Nome</th>
          <th scope="col">Telefone</th>
          <th scope="col">Detalhes da Negociação</th>
          <th scope="col">Valor pré negociado</th>
        </tr>
      </thead>
      <tbody>
        <?php
//pecorrendo os registros da consulta.
while($aux = mysqli_fetch_assoc($sql))
{
?>
          <tr>
            <td>
              <?php echo $aux["nome"]; ?>
            </td>
            <td>
              <?php echo $aux["contato"]; ?>
            </td>
            <td>
              <?php echo $aux["redesocial"]; ?>
            </td>
            <td>
              <?php echo $aux["carronegociado"]; ?>
            </td>
            <td>
              <?php echo $aux["detalhesdenegociacao"]; ?>
            </td>
            <td>
              <?php echo $aux["vendedor"]; ?>
            </td>
            <td>
              <?php echo $aux["loja"]; ?>
            </td>
            <td>
              <?php echo $aux["canal"]; ?>
            </td>
            <td>
              <?php echo $aux["status"]; ?>
            </td>
          </tr>
      </tbody>
    </table>
  </body>

  </html>

  <?php }?>