<?php


$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

$apelido = $_POST['apelido'];

$sql = "SELECT Nome_de_usuario FROM tbcliente WHERE Nome_de_usuario = '{$apelido}'";

$resul = mysqli_query($conexao, $sql);
                                                //Arrumar
$buscando = mysqli_num_rows($resul);
if($buscando == 1){
    echo "Nome de usuário ja utilizado";
}