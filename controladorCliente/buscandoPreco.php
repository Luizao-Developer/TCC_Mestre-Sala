
<?php

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

$idProcedimento = $_POST['idProcedimento'];

$sql = "SELECT Valor FROM tbprocedimento WHERE Codigo = {$idProcedimento}";
$resul = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_array($resul);
echo $linha['Valor'];


