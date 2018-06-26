<?php

    ini_set('default_charset', 'UTF-8');

    $cliente = $_GET['cliente'];
    $tel = $_GET['tel'];
    $email = $_GET['email'];
    $cep = $_GET['cep'];
    $status = $_GET['status'];
    $obs = $_GET['obs'];
    $vendedor = $_GET['vendedor'];
    $loja = $_GET['loja'];
    $canal = $_GET['canal'];
    $data = date ("Y-m-d H:i:s", $phptime);

          
    
    require_once 'conexao.php';

    // Attempt insert query execution
    try{
        $sql = "INSERT INTO vendas (
            cliente,
            tel,
            email,
            cep,
            status,
            obs,
            vendedor,
            loja,
            canal,
            data
            
            ) VALUES (
                '$cliente',
                 $tel,
                '$email',
                 $cep,
                '$status',
                '$obs',
                '$vendedor',
                '$loja',
                '$canal',
                '$data'
            )";

        $pdo->exec($sql);
        echo true;
        
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }

    unset($pdo);
?>