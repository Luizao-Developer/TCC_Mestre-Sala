<?php

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");


if(isset($_POST['realiza_agendamento'])){
        $Barbearia = $_POST['barbearia'];
        $Cliente = $_POST['cliente'];
        $Procedimento = $_POST['procedimento'];
        $Preco = $_POST['preco'];
        $Data_agendamento = $_POST['data_agendamento'];
        $Hora = $_POST['hora'];

        //Codigos
        $CodigoCliente = $_POST['CodigoCliente'];
        $CodigoBarbearia = $_POST['CodigoBarbearia'];


        $sql = "INSERT INTO tbagendamento( StatusAgendamento, Barbearia, Cliente, Preco, Data_agendamento, Hora, tbProcedimento_Codigo, tbCliente_Codigo, tbBarbearia_Codigo) 
        VALUES ('Agendado','{$Barbearia}','{$Cliente}','{$Preco}','{$Data_agendamento}','{$Hora}','{$Procedimento}','{$CodigoCliente}','{$CodigoBarbearia}')";

        $result = mysqli_query($conexao, $sql);

        
}


