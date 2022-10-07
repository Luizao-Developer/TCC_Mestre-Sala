<?php

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

require_once("funcoesBarbearia.php");
$codigo = $_POST['Codigo'];
if(isset($_POST['salvar'])){

    $imagem=  "";
    if(!empty($_FILES['foto']['name'])){
            $imagem = adicionaArquivos($_FILES['foto']['name'],$_FILES['foto']['tmp_name']);
            

    }

//Continuação do codigo

$nomeAdmin = $_POST['nomeAdmin'];
$nomeBarbearia = $_POST['nome_da_barbearia'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];
$cnpj = $_POST['cnpj'];
$telefone_comercial = $_POST['telefone_comercial'];
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$status = $_POST['status'];
$telefone_pessoal = $_POST['telefone_pessoal'];
$adicional = $_POST['adicional'];

$sql = "update tbbarbearia 
            set nomeAdmin = '{$nomeDeUsuario}', 
            NomeBarbearia = '{$nomeBarbearia}',
            Endereco = '{$endereco}',
            Email = '{$email}',
            Telefone_comercial = '{$telefone_comercial}',
            CEP = '{$cep}',
            Cidade = '{$cidade}',
            Estado = '{$uf}',
            Status = '{$status}',
            Foto = '{$imagem}',
            adicional = '{$adicional}',
            Facebook = '{$facebook}',
            Instagram = '{$instagram}'
        where CodigoBarbearia = {$codigo} ";

    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    $mensagem = "Informações atualizadas com sucesso";
    header("location: ../view_barbearia/MStelaprincipal_barbearia.php?mensagem = {$mensagem}");
    die();
}