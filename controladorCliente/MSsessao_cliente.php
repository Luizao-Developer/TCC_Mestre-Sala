<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['CodigoCliente'])){
    $mensagem = "Sessão expirada. Faça o login novamente.";
    header("location: ../view_cliente/MSlogin_cliente.php");
    die();
}

?>