<?php


$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

$cnpj = $_POST['CNPJ'];

$consulta = "SELECT CNPJ FROM tbbarbearia
            WHERE CNPJ = '{$cnpj}' ";
        
$resultado = mysqli_query($conexao, $consulta);

$encontrou = mysqli_num_rows($resultado);

if($encontrou == 1){
    echo "CNPJ esta sendo utilizado, verifica novamente seu CNPJ";

}
mysqli_close($conexao);