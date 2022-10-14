
<?php

$conect = mysqli_connect("127.0.0.1","root","","mestre_sala");

$codigo = $_POST['Codigo'];
if(isset($_POST['salvar'])){

    
    $nome           = $_POST['Nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $pis_pasep = $_POST['pis_pasep'];
    $data_demissao = $_POST['data_demissao'];
    $status = $_POST['status'];

    $sql ="update tbfuncionarios
            set  Telefone  = '{$telefone}',
                 Nome      = '{$nome}',
                 Endereco   = '{$endereco}',
                 Cidade = '{$cidade}',
                 CEP = '{$cep}',
                 UF = '{$uf}',
                 Email = '{$email}',
                 Status = '{$status}',
                 PIS_PASEP = '{$pis_pasep}',
                 Data_demissao = '{$data_demissao}'
        where   Codigo      = {$codigo}";
            
    mysqli_query($conect,$sql);
    $mensagemAtu = "Registro atualizado com sucesso";

    header("Location: ../view_barbearia/MSfuncionarios_barbearia.php?mensagem={$mensagemAtu}");
}
