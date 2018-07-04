<?php
 
// inclui o arquivo de inicialização
require 'init.php';
 
// resgata variáveis do formulário
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
 
if (empty($nome) || empty($senha))
{
    echo "Informe email e senha";
    exit;
}
 
// cria o hash da senha
$passwordHash = make_hash($senha);
 
$PDO = db_connect();
 
$sql = "SELECT nome, senha FROM usuarios WHERE nome = :nome AND senha = :senha";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':senha', $passwordHash);
 
$stmt->execute();
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
if (count($users) <= 0)
{
    echo "Usuario ou senha incorretos";
    exit;
}
 
// pega o primeiro usuário
$user = $users[0];
 
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['name'];
 
header('Location: ../../cadastrar.html');