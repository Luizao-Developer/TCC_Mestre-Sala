
<?php
if(isset($_POST['email']) && isset($_POST['senha'])){

    //receber os dados do email e da senha;
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

   

    $conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");
    $sql = "select *
                from tbbarbearia
                where Email = '{$email}'";
    $resultado = mysqli_query($conexao, $sql); //Executar a sql
    
    
    
    //Retorna o numero de registros encontrados na consulta do select
    $totalDeRegistros = mysqli_num_rows($resultado);
    
    
    //Carrega o objeto nome do banco de dados.
    $nome = mysqli_fetch_array($resultado);

    
    //&& password_verify($_POST['senha'], $nome['Senha_de_acesso'])
    if($totalDeRegistros == 1 ){

    

        //Inicia a sessão senão tiver nenhuma ativa
        
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
            
            
            }
            /*
            if(!isset($_SESSION)){
                session_start();
                }
                */
            $_SESSION['CodigoBarbearia']    = $nome['CodigoBarbearia'];
            $_SESSION['CNPJ'] = $nome['CNPJ'];
            $_SESSION['nomeAdmin'] = $nome['nomeAdmin'];
            $_SESSION['NomeBarbearia']  = $nome['NomeBarbearia'];
            $_SESSION['Endereco'] = $nome['Endereco'];
            $_SESSION['Email'] = $nome['Email'];
            $_SESSION['Telefone_comercial'] = $nome['Telefone_comercial'];
            $_SESSION['Telefone_pessoal'] = $nome['Telefone_pessoal'];
            $_SESSION['CEP'] = $nome['CEP'];
            $_SESSION['Cidade'] = $nome['Cidade'];
            $_SESSION['Estado'] = $nome['Estado'];
            $_SESSION['Status'] = $nome['Status'];
            $_SESSION['Foto'] = $nome['Foto'];
            $_SESSION['adicional'] = $nome['adicional'];
            $_SESSION['Facebook'] = $nome['Facebook'];
            $_SESSION['Instagram'] = $nome['Instagram'];
    
            header("Location: ../view_barbearia/MStelaprincipal_barbearia.php");
           die();
    }else{
      
        $mensagem = "Email ou senha inválidos";
        header("Location: ../view_barbearia/MSlogin_barbearia.php?mensagem={$mensagem}");
        
        die();
    }
}





?>