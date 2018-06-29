<?php

    ini_set('default_charset', 'UTF-8');

    $nome = $_GET['nome'];
    $contato = $_GET['contato'];
    $redesocial = $_GET['redesocial'];
    $carronegociado = $_GET['carronegociado'];
    $detalhesdenegociacao = $_GET['detalhesdenegociacao'];
    $vendedor = $_GET['vendedor'];
    $loja = $_GET['loja'];
    $canal = $_GET['canal'];
    $status = $_GET['status'];
    $criado = date("Y-m-d H:i:s", $phptime);
    $modificado = date("Y-m-d H:i:s", $phptime);
    

    require_once 'conexao.php';

    // Attempt insert query execution
    try{
        $sql = "INSERT INTO clientes (
            nome,
            contato,
            redesocial,
            carronegociado,
            detalhesdenegociacao,
            vendedor,
            loja,
            canal,
            status,
            criado,
            modificado
            
            ) VALUES (
                '$nome',
                 $contato,
                '$redesocial',
                '$carronegociado',
                '$detalhesdenegociacao',
                '$vendedor',
                '$loja',
                '$canal',
                '$status',
                '$criado',
                '$modificado'
            )";

        $pdo->exec($sql);
        echo true;
        
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }

    unset($pdo);
    
  if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro inserido com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao inserir registro!</div> ";
			endif;
 
			echo "<meta http-equiv=refresh content='3;URL=index.html'>";
		endif;
?>