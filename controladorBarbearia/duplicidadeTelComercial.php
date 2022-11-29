<?php

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

$telefoneComercial = $_POST['telefoneComercial'];

$consulta = "SELECT Telefone_comercial FROM tbbarbearia
            WHERE Telefone_comercial = '{$telefoneComercial}'";

$resultado = mysqli_query($conexao, $consulta);

$encontrou = mysqli_num_rows($resultado);

if($encontrou == 1){
    echo "Telefone comercial já utilizado, verifique os digitos!";
}
mysqli_close($conexao);