<?php

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");


if(isset($_POST['cadastrar'])){

$Nome = $_POST['nome'];
$Descricao = $_POST['descricao'];
$Valor = $_POST['valor'];
$Tempo_estimado = $_POST['Tempo_estimado'];
$Status = $_POST['status'];
$CodigoBarbearia = $_POST['codigoBarbearia'];

$sqlProcedimento = " INSERT INTO 
tbprocedimento( StatusProcedimento, NomeProcedimento, Descricao, Valor, Tempo_estimado, tbBarbearia_Codigo)
  VALUES ('{$Status}','{$Nome}','{$Descricao}','{$Valor}','{$Tempo_estimado}','{$CodigoBarbearia}')";

$resultado = mysqli_query($conexao, $sqlProcedimento);
mysqli_close($conexao);

$mensagem="Novo procedimento foi cadastrado!";

header("location: ../view_barbearia/MSprocedimentos_barbearia.php?mensagem = {$mensagem} ");
die();
}

?>