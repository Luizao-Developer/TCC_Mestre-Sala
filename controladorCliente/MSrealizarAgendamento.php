<?php

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");


if(isset($_POST['realiza_agendamento'])){
    $barbearia = $_POST['barbearia'];
    $cliente = $_POST['cliente'];
    $procedimento = $_POST['procedimento'];
    $Data_agendamento = $_POST['data_agendamento'];
    $hora = $_POST['hora'];
    $preco = $_POST['preco'];

    $CodigoCliente = $_POST['CodigoCliente'];
    $CodigoBarbearia = $_POST['CodigoBarbearia'];


}


