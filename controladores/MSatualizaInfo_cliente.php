<?php

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

require_once("funcoesCliente.php");
$codigo = $_POST['Codigo'];
if(isset($_POST['salvar'])){

    if(!empty($_FILES['foto']['Nome'])){
        $nomeNovaImagem = adicionaArquivos($_FILES['foto']['Nome'],$_FILES['foto']['tmp_ome']);
   

    $sqlExtra = ", Foto = '{$nomeNovaImagem}'";

    $foto = getImagemUsuario($_POST['Codigo'], $conexao);
    excluiArquivo("arquivos\\". $foto);
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

$result =  mysqli_query($conexao, $sql);
    $mensagem = "Informações atualizadas com sucesso";
    header("location: ../view_cliente/MStelaprincipal_cliente.php?mensagem = {$mensagem}");
    die();
}