<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['CodigoBarbearia'])){
    $mensagem = "Sessão expirada. Faça o login novamente.";
    header("location: ../view_barbearia/MSlogin_barbearia.php");
    die();
}

?>