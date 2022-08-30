<?php
    require_once("MSsessao_barbearia.php");
?>
<?php


$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

function inserirFuncionario(){
  
}

if(isset($_POST['cadastrar'])){

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $pis_pasep = $_POST['pis_pasep'];
    $data_nascimento = $_POST['data_nascimento'];
    $data_contratacao = $_POST['data_contratacao'];
    $status = $_POST['status'];
    $barbearia = $_SESSION['Codigo'];

    $sql = "insert into tbfuncionarios(Telefone, Nome,Endereco,Data_nascimento,Cidade,CEP,UF,Email,Status,PIS_PASEP,Data_contratacao,tbBarbearia_Codigo )
    values('{$telefone}','{$nome}','{$endereco}','{$data_nascimento}','{$cidade}','{$cep}','{$uf}','{$email}','{$status}','{$pis_pasep}','{$data_contratacao}','{$barbearia}')";

    mysqli_query($conexao,$sql);

    mysqli_close($conexao);

    header("location: \TCC_Mestre-Sala\MSfuncionarios_barbearia.php");
    

}