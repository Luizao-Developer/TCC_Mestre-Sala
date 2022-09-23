<?php
if(isset($_POST['email']) && isset($_POST['senha'])){

    //receber os dados do email e da senha;
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    $conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");
    $sql = "select *
                from tbcliente
                where EmailCliente = '{$email}'";
    $resultado = mysqli_query($conexao, $sql); //Executar a sql
    
    

    //Retorna o numero de registros encontrados na consulta do select
    $totalDeRegistros = mysqli_num_rows($resultado);
    
    

    //Carrega o objeto nome do banco de dados.
    $nome = mysqli_fetch_array($resultado);

    // && password_verify($_POST['senha'], $nome['Senha_de_acesso'])

    if($totalDeRegistros == 1){

        //Inicia a sessão senão tiver nenhuma ativa
        if(!isset($_SESSION['Codigo'])){
        session_start();
        }
        $_SESSION['Codigo']    = $nome['Codigo'];
        $_SESSION['Telefone'] = $nome['Telefone'];
        $_SESSION['Nome']  = $nome['Nome'];
        $_SESSION['Endereco'] = $nome['Endereco'];
        $_SESSION['Data_nascimento'] = $nome['Data_nascimento'];
        $_SESSION['Cidade'] = $nome['Cidade'];
        $_SESSION['CEP'] = $nome['CEP'];
        $_SESSION['UF'] = $nome['UF'];
        $_SESSION['Email'] = $nome['Email'];
        $_SESSION['Nome_de_usuario'] = $nome['Nome_de_usuario'];
        $_SESSION['Foto'] = $nome['Foto'];

        
        
        header("location: ../view_cliente/MStelaprincipal_cliente.php");
        die();

    }else{
        $_GET = "Usuario ou senha inválidos";
       echo "Deu ruim";
       $mensagem = "Email ou senha inválidos";
        header("location: ../view_cliente/MSlogin_cliente.php?mensagem={$mensagem}");
        die();
    }
}
?>