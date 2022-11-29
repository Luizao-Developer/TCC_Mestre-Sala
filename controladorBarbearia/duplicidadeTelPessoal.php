<?php

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

$telefonePessoal = $_POST['telefonePessoal'];

$consulta = "SELECT Telefone_pessoal FROM tbbarbearia
            WHERE Telefone_pessoal = '{$telefonePessoal}' ";

$resultado = mysqli_query($conexao, $consulta);

$encontrou = mysqli_num_rows($resultado);

if($encontrou == 1){
    echo "Telefone pessoal já utilizado, verifique os digitos!";

}

mysqli_close($conexao);
