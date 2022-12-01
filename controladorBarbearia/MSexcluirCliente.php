<?php


$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

$CodigoBarbearia = $_POST['CodigoBarbearia'];
$CodigoCliente = $_POST['CodigoCliente'];

if(isset($_POST['deixar_de_ser_cliente'])){

    $sql = "DELETE FROM tbbarbearias_clientes WHERE Codigo_Cliente = {$CodigoCliente} and Codigo_Barbearia = {$CodigoBarbearia}";

    $result = mysqli_query($conexao, $sql);

}
mysqli_close($conexao);