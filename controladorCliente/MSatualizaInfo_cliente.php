<?php

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

require_once("../controladorCliente/funcoesCliente.php");
$codigo = $_POST['Codigo'];
if(isset($_POST['salvar'])){
    $imagem=  "";
    if(!empty($_FILES['foto']['name'])){
            $imagem = adicionaArquivos($_FILES['foto']['name'],$_FILES['foto']['tmp_name']);
            

    }

        /*
        if(isset($_FILES['foto'])){

            $extensao = strtolower(substr($_FILES['foto']['name'],-4));

            $novo_nome = md5(time()).$extensao;
            $diretorio = "../upload/";

            move_uploaded_file($_FILES['foto']['tmp_name'],$diretorio.$novo_nome);

        }
        */
    

//Continuação do codigo

$nomeDeUsuario = $_POST['nome_de_usuario'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];

$sql = "update tbcliente 
            set Nome_de_usuario = '{$nomeDeUsuario}', 
            Email = '{$email}',
            Endereco = '{$endereco}',
            Cidade = '{$cidade}',
            UF = {$uf},
            CEP = '{$cep}',
            Foto = '{$imagem}'
        where Codigo = {$codigo} ";
        
mysqli_query($conexao, $sql);


    $mensagem = "Informações atualizadas com sucesso";
    header("location: ../view_cliente/MStelaprincipal_cliente.php?mensagem = {$mensagem}");
    die();
}

mysqli_close($conexao);
