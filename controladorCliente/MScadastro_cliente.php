<?php

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

if(isset($_POST["cadastrar"])){
    $nome = $_POST["nome"];
    $nomeUsuario = $_POST["nomeUsuario"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $dataNascimento = $_POST["dataNascimento"];
    $endereco = $_POST["endereco"];
    $cep = $_POST["cep"];
    $cidade= $_POST["cidade"];
    $uf = $_POST["uf"];
    //$senhaDeAcesso = password_hash($_POST['senhaDeAcesso'],PASSWORD_DEFAULT);
    $senhaDeAcesso = $_POST['senhaDeAcesso'];
    


    $sql = "insert into 
    tbcliente(Telefone,Nome,Endereco,Data_nascimento,Cidade,CEP,UF,EmailCliente,Senha_de_acesso,Nome_de_usuario) 
    values('{$telefone}','{$nome}','{$endereco}','{$dataNascimento}','{$cidade}','{$cep}','{$uf}','{$email}','{$senhaDeAcesso}','{$nomeUsuario}')";

    var_dump($sql);

    mysqli_query($conexao, $sql);

    mysqli_close($conexao);

    $nomeDe = $nome;
    header("location: ../view_cliente/MSposcadastro_cliente.php?");

}


?>