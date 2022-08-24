<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['Codigo'])){
    $mensagem = "Sessão expirada. Faça o login novamente.";
    header("location: \TCC_Mestre-Sala\MSlogin_barbearia.php");
    die();
}

?>