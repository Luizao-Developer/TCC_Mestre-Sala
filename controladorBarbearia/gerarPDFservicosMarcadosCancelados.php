<?php

require '../vendor/autoload.php';

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

$codBarbearia = $_POST['codBarbearia'];
$sql = "SELECT * FROM tbprocedimento 
INNER JOIN tbagendamento ON StatusAgendamento LIKE '%Cancelado%' AND tbagendamento.tbProcedimento_Codigo = tbprocedimento.Codigo
INNER JOIN tbcliente on tbcliente.CodigoCliente = tbagendamento.tbCliente_Codigo 
INNER JOIN tbbarbearia on tbbarbearia.CodigoBarbearia = {$codBarbearia}";


$buscaBanco = mysqli_query($conexao, $sql);

$agora = date('d/m/Y');
$hora = date('H:i');

$inform = "<DOCTYPE html>";
$inform .= "<html>";
$inform .= "<head>";
$inform .= "<meta charset = 'UTF-8'>";
$inform .= "<title>Relatório de agendamentos marcados</title>";
$inform .= "</head>";
$inform .= "<body>";

$inform .= "<h2>Relatório de agendamentos marcados em sua barbearia</h2>";

while ($mostrando = mysqli_fetch_array($buscaBanco)) {
    $inform .= "<strong>Status</strong>: {$mostrando['StatusAgendamento']} , ";
    $inform .= "<strong>Cliente</strong>: {$mostrando['Cliente']} , ";
    $inform .= "<strong>Preço</strong>: {$mostrando['Preco']} , ";
    $inform .= "<strong>Data </strong>: {$mostrando['Data_agendamento']} , ";
    $inform .= "<strong>Hora</strong>: {$mostrando['Hora']} , ";
    $inform .= "<strong>Procedimento</strong>: {$mostrando['NomeProcedimento']} , ";
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
