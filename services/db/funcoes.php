<?php
 
/**
 * Conecta com o MySQL usando PDO
 */
function db_connect()
{
    $PDO = new PDO("mysql:host=mysql472.umbler.com", "autoesporte", "autoesporte1");
 
    return $PDO;
}
 
 
/**
 * Cria o hash da senha, usando MD5 e SHA-1
 */
function make_hash($str)
{
    return sha1(md5($str));
}
 
 
/**
 * Verifica se o usuário está logado
 */
function isLoggedIn()
{
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        return false;
    }
 
    return true;
}