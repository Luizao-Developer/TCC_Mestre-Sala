
<?php


$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");


if(isset($_POST['cadastrar'])){

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $pis_pasep = $_POST['pis_pasep'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $data_contratacao = $_POST['data_contratacao'];
    $status = $_POST['status'];
    $tbBarbearia_Codigo = $_POST['codigoBarbearia'];

    $sql = "insert into tbfuncionarios(Telefone, Nome,Endereco,Data_nascimento,Cidade,CEP,UF,Email,Status,PIS_PASEP,RG,CPF,Data_contratacao,tbBarbearia_Codigo )
    values('{$telefone}','{$nome}','{$endereco}','{$data_nascimento}','{$cidade}','{$cep}','{$uf}','{$email}','{$status}','{$pis_pasep}','{$rg}','{$cpf}','{$data_contratacao}','{$tbBarbearia_Codigo}')";

    mysqli_query($conexao,$sql);

    mysqli_close($conexao);
    
    $msgNovoFuncionario = "Novo funcionário cadastrado!";
    
    header("location: ../view_barbearia/MSfuncionarios_barbearia.php?msgNovoFuncionario = {$msgNovoFuncionario}");
    

}