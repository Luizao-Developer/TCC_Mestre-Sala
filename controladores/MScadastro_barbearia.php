<?php

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

#Realizando a inserção dos dados na tabela barbearia
if(isset($_POST["cadastrar"])){

    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $email = $_POST["email"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];
    $cnpj = $_POST["cnpj"];
    $telefoneComercial = $_POST["telefoneComercial"];
    $status = $_POST["status"];
    

    #Admin
    $nomeAdmin = $_POST["nomeAdmin"];
    $telefonePessoal = $_POST["telefonePessoal"];
    //$senhaAcesso = password_hash($_POST['senhaAcesso'] ,PASSWORD_DEFAULT);
    $senhaAcesso = $_POST['senhaAcesso'];
    

    $sql = "insert into 
    tbbarbearia(CNPJ,NomeBarbearia,Endereco,Email,Telefone_comercial,NomeAdmin, Telefone_pessoal,Senha_de_acesso,CEP,Cidade,Estado,Status) values
    ('{$cnpj}','{$nome}','{$endereco}','{$email}','{$telefoneComercial}','{$nomeAdmin}','{$telefonePessoal}','{$senhaAcesso}','{$cep}','{$cidade}','{$uf}','{$status}')";
   

    mysqli_query($conexao,$sql);

    mysqli_close($conexao);

   
    header("location: ../view_barbearia/MSposcadastro_barbearia.php");
}

?>