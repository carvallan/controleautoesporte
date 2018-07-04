<?php
 
// constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', 'mysql472.umbler.com');
define('DB_USER', 'autoesporte');
define('DB_PASS', 'autoesporte1');
define('DB_NAME', 'dbautoesporte');
 
// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);
 
// inclui o arquivo de funçõees
require_once 'funcoes.php';