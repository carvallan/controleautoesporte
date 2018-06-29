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
    
		// Valida os dados recebidos
		$mensagem = '';
		if ($acao == 'editar' && $id == ''):
		    $mensagem .= '<li>ID do registros desconhecido.</li>';
	    endif;
 
	    // Se for ação diferente de excluir valida os dados obrigatórios
	    if ($acao != 'excluir'):
			if ($nome == '' || strlen($nome) < 3):
				$mensagem .= '<li>Favor preencher o Nome.</li>';
		    endif;
 
 
			if ($contato == ''):
			   $mensagem .= '<li>Favor preencher o contato.</li>';
		    elseif(strlen($contato) < 11):
				  $mensagem .= '<li>Formato do contato inválido.</li>';
		    endif;
 
			if ($redesocial == ''):
				$mensagem .= '<li>Favor preencher a rede social.</li>';
			endif;
      
      if ($carronegociado == ''):
				$mensagem .= '<li>Favor preencher qual carro foi negociado.</li>';			
			endif;

      if ($detalhesdenegociacao == ''):
				$mensagem .= '<li>Favor preencher os detalhes da negociação.</li>';
			endif;

      if ($vendedor == ''):
				$mensagem .= '<li>Favor preencher o nome do vendedor.</li>';
			endif;
      
      if ($loja == ''):
				$mensagem .= '<li>Favor preencher o campo loja.</li>';			
			endif;
      
      if ($canal == ''):
				$mensagem .= '<li>Favor preencher o campo canal.</li>';
			endif;
 
			if ($status == ''):
			   $mensagem .= '<li>Favor preencher o Status.</li>';
			endif;
 
			if ($mensagem != ''):
				$mensagem = '<ul>' . $mensagem . '</ul>';
				echo "<div class='alert alert-danger' role='alert'>".$mensagem."</div> ";
				exit;
			endif;
 
/*
			// Constrói a data no formato ANSI yyyy/mm/dd
			$data_temp = explode('/', $data_nascimento);
			$data_ansi = $data_temp[2] . '/' . $data_temp[1] . '/' . $data_temp[];
		endif; */
 
 
 /*
		// Verifica se foi solicitada a inclusão de dados
		if ($acao == 'incluir'):
 
			$nome_foto = 'padrao.jpg';
			if(isset($_FILES['foto']) && $_FILES['foto']['size'] > ):  
 
				$extensoes_aceitas = array('bmp' ,'png', 'svg', 'jpeg', 'jpg');
			    $extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));
 
			     // Validamos se a extensão do arquivo é aceita
			    if (array_search($extensao, $extensoes_aceitas) === false):
			       echo "<h1>Extensão Inválida!</h1>";
			       exit;
			    endif;
 
			     // Verifica se o upload foi enviado via POST   
			     if(is_uploaded_file($_FILES['foto']['tmp_name'])):  
			             
			          // Verifica se o diretório de destino existe, senão existir cria o diretório  
			          if(!file_exists("fotos")):  
			               mkdir("fotos");  
			          endif;  
			  
			          // Monta o caminho de destino com o nome do arquivo  
			          $nome_foto = date('dmY') . '_' . $_FILES['foto']['name'];  
			            
			          // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino  
			          if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/'.$nome_foto)):  
			               echo "Houve um erro ao gravar arquivo na pasta de destino!";  
			          endif;  
			     endif;  
			endif; */
    
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
  
?>