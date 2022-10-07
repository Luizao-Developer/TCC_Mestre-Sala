<?php

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

require_once("funcoesCliente.php");
$codigo = $_POST['Codigo'];
if(isset($_POST['salvar'])){

    $imagem=  "";
    if(!empty($_FILES['foto']['name'])){
            $imagem = adicionaArquivos($_FILES['foto']['name'],$_FILES['foto']['tmp_name']);
            

    }

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
            CEP = '{$cep}'
            {$sqlExtra}
        where Codigo = {$codigo} ";

    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    $mensagem = "Informações atualizadas com sucesso";
    header("location: ../view_barbearia/MStelaprincipal_barbearia.php?mensagem = {$mensagem}");
    die();
}