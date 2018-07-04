<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
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
      
    } catch(PDOException $e){
        die("ERROR: Could not connect. " . $e->getMessage());
    }; 
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['nome'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($pdo, $_POST['nome']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($pdo, $_POST['senha']);
        $senha = md5($senha);
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM usuarios WHERE nome = '$usuario' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($pdo, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['usuarioId'] = $resultado['id'];
            $_SESSION['usuarioNome'] = $resultado['nome'];
            $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
            $_SESSION['usuarioEmail'] = $resultado['email'];
            if($_SESSION['usuarioNiveisAcessoId'] == "1"){
                header("Location: administrativo.php");
            }elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
                header("Location: colaborador.php");
            }else{
                header("Location: cliente.php");
            }
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: login.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: login.php");
    }
?>
