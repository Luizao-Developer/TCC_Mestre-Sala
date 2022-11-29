<?php

require '../vendor/autoload.php';

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

$CodBarbearia = $_POST['codBarbearia'];

//Esta consulta tem a função de mostrar os funcionários de uma respectiva barbearia, sem mostrar uma lista gigante para todas as barbearias cadastradas
$sqlFuncionarios = "select * from tbfuncionarios where 1 = 1 order by Nome and Status like 'Em licença%' and tbBarbearia_Codigo = {$CodBarbearia}";





$result = mysqli_query($conexao,$sqlFuncionarios);

$qtd = mysqli_num_rows($result);

$agora = date('d/m/Y');
$hora = date('H:i');
//documento html
$inform = "<DOCTYPE html>";
$inform .= "<html>";
$inform .= "<head>";
$inform .= "<meta charset = 'UTF-8'>";
$inform .= "<title>Relatório de funcionários</title>";
$inform .= "</head>";
$inform .= "<body>";

$inform .= "<h2>Relatório de funcionarios trabalhando</h2>";

while($linha = mysqli_fetch_array($result)){
    $inform .= "<strong>Nome: </strong> {$linha['Nome']} ,";
    $inform .= " <strong>Data nascimento: </strong> {$linha['Data_nascimento']} , ";
    $inform .= " <strong>Endereço: </strong> {$linha['Endereco']} ,";
    $inform .= " <strong>Cidade: </strong> {$linha['Cidade']} , ";
    $inform .= " <strong>CEP: </strong> {$linha['CEP']} , ";
    $inform .= " <strong>UF: </strong>  {$linha['UF']} , ";
    $inform .= " <strong>Email: </strong> {$linha['Email']} , ";
    $inform .= " <strong>PIS-PASEP: </strong> {$linha['PIS_PASEP']} ,";
    $inform .= " <strong>Data contratação: </strong> {$linha['Data_contratacao']} ,";
    $inform .= " <strong>Telefone: </strong> {$linha['Telefone']} ,";
    $inform .= " <strong>Status: </strong> {$linha['Status']} ,";
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
