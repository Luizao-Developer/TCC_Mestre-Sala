<?php

require '../vendor/autoload.php';

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

$sql = "SELECT * FROM tbcliente
INNER JOIN tbbarbearias_clientes
ON tbbarbearias_clientes.Codigo_Cliente = tbcliente.Codigo";

$resultado = mysqli_query($conexao, $sql);

$agora = date('d/m/Y');
$hora = date('H:i');
//documento html
$inform = "<DOCTYPE html>";
$inform .= "<html>";
$inform .= "<head>";
$inform .= "<meta charset = 'UTF-8'>";
$inform .= "<title>Relatório de clientes</title>";
$inform .= "</head>";
$inform .= "<body>";

$inform .= "<h2>Relatório de clientes de sua barbearia</h2>";

while($nome = mysqli_fetch_array($resultado)){
    $inform .= "<strong>Nome</strong>: {$nome['Nome']} , ";
    $inform .= " <strong>Endereço</strong>: {$nome['Endereco']} , ";
    $inform .= " <strong>Cidade</strong>: {$nome['Cidade']} , ";
    $inform .= " <strong>CEP</strong>: {$nome['CEP']} , ";
    $inform .= " <strong>UF</strong>: {$nome['UF']} , ";
    $inform .= " <strong>Telefone</strong>: {$nome['Telefone']} , ";
    $inform .= " <strong>Email</strong>: {$nome['EmailCliente']} , ";
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
