<?php


$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

$email = $_POST['email'];

$sql = "SELECT EmailCliente FROM tbcliente WHERE EmailCliente = '{$email}'";

$resul = mysqli_query($conexao, $sql);
                                                //Arrumar
$buscando = mysqli_num_rows($resul);
if($buscando == 1){
    echo "Email ja utilizado!";
}