<?php

require '../vendor/autoload.php';
$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

$CodBarbearia = $_POST['codBarbearia'];

$sqlProcedimento = "SELECT * FROM tbprocedimento WHERE tbBarbearia_Codigo =  {$CodBarbearia}";
$result = mysqli_query($conexao, $sqlProcedimento);

$agora = date('d/m/Y');
$hora = date('H:i');
//documento html
$inform = "<DOCTYPE html>";
$inform .= "<html>";
$inform .= "<head>";
$inform .= "<meta charset = 'UTF-8'>";
$inform .= "<title>Relatório de procedimentos</title>";
$inform .= "</head>";
$inform .= "<body>";

$inform .= "<h2>Relatório de procedimentos que sua barbearia ofereçe</h2>";

while($linha = mysqli_fetch_array($result)){
    $inform .= "<strong>Nome: </strong>{$linha['NomeProcedimento']}";
    $inform .= " <strong>Descrição: </strong>{$linha['Descricao']} , ";
    $inform .= " <strong>Valor: </strong>{$linha['Valor']} , ";
    $inform .= " <strong>Tempo estimado: </strong>{$linha['Tempo_estimado']} , ";
    $inform .= " <strong>Status: </strong>{$linha['StatusProcedimento']}  ";
    $inform .= "<hr>";
}

$inform .= "Emitido {$agora} às {$hora} ";
$inform .= "</body>";
$inform .= "</html>";

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($inform);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
