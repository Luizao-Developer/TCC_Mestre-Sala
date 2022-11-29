<?php

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

$email = $_POST['email'];

$consulta = "SELECT Email FROM tbbarbearia 
                WHERE Email = '{$email}' ";
$resultado = mysqli_query($conexao, $consulta);

$encontrou = mysqli_num_rows($resultado);

if($encontrou == 1){
    echo "Email ja utilizado";
}

mysqli_close($conexao);