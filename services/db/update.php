<?php

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
  
    include_once 'conexao.php';    
      
    $sql = "update cliente set 
            nome = '".$nome."', contato = '".$contato."',redesocial = '".$redesocial."',carronegociado = '".$carronegociado."',detalhesdenegociacao = '"$detalhesdenegociacao."',vendedor = '".$vendedor."',loja = '".$loja."',canal = '".$canal."',status = '".$status."'.
            where idcliente = ".$id;
  
    if(mysql_query($sql,$con)){
        $msg = "Atualizado com sucesso!";
    }else{
        $msg = "Erro ao atualizar!";
    }
    mysql_close($con);    
      
    ?>