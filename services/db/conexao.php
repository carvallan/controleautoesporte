<?php
    
    try{
        $pdo = new PDO("mysql:host=mysql472.umbler.com", "autoesporte", "autoesporte1", array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                PDO::ATTR_PERSISTENT => false,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            )
        );
        
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Print host information
         
        // $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
        $sql = "use dbautoesporte";
        $pdo->exec($sql);
        echo "Dado inserido com sucesso!"
        header("Location: https://controleautoesporte-com-br.umbler.net/index.html"); ;
    } catch(PDOException $e){
        die("ERROR: Could not connect. " . $e->getMessage());
    }
?>