<?php

require_once("../controladorCliente/MSsessao_cliente.php");
?>
<?php

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

//$sqlAgendamento = "SELECT * FROM tbagendamento WHERE tbCliente_Codigo = {$_SESSION['Codigo']}";
/*
$sqlClientes = "SELECT * FROM tbcliente
                    INNER JOIN tbbarbearias_clientes 
                    ON tbbarbearias_clientes.Codigo_Cliente = tbcliente.Codigo";
 */
$sqlAgendamento = "SELECT * FROM tbprocedimento
INNER JOIN tbagendamento ON tbagendamento.tbProcedimento_Codigo = tbprocedimento.Codigo
INNER JOIN tbcliente on tbcliente.CodigoCliente = tbagendamento.tbCliente_Codigo";

$buscarBanco = mysqli_query($conexao, $sqlAgendamento);


?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="../imagens/logo_com_fundo.png" type="image/x-icon">
    <link rel="stylesheet" href="../cliente_arquivos_css/MSagendamentos_cliente.css">
    <title>Mestre-Sala</title>
</head>

<body>
<?php require_once("../componentes/menuCliente.php"); ?>
<div class="espacamento">

</div>
<div class="pg_principal container">

       <!--Informações e realização de agendamento-->
       <div class="alert alert-primary" role="alert" id="card_info">
            <h4 class="alert-heading">Lista de Agendamentos</h4>
            
            
            
        </div>
        <!--Listagem dos agendamentos de cada cliente-->
        <table class="table table-dark  table-hover">
            <thead>
                <tr>
                <th width="5%">Status</th>
                <th width="10%">Serviço</th>
                <th width="5%">Preço</th>
                <th width="5%">Data</th>
                <th width="5%">Hora</th>
                <th width="10%">Barbearia</th>
                
                </tr>
            </thead>
            <?php while($linha = mysqli_fetch_array($buscarBanco)) { ?>
            <tbody>
           
                <tr>
                <td>
                <?php if($linha['StatusAgendamento'] == 'Agendado'): ?>
                    <div id="agendado" style="background:blue; padding:10px 10px; text-align:center; border-radius:5px;">
                    <?=  $linha['StatusAgendamento'] ?> 
                    </div>
                <?php endif ?>
                <?php if($linha['StatusAgendamento'] == 'Concluido/Pago'): ?>
                    <div id="agendado" style="background:green; padding:10px 10px; text-align:center; border-radius:5px;">
                    <?=  $linha['StatusAgendamento'] ?> 
                    </div>
                <?php endif ?>
                <?php if($linha['StatusAgendamento'] == 'Concluido/Em débito'): ?>
                    <div id="agendado" style="background:yellow;color:black; padding:10px 10px; text-align:center; border-radius:5px;">
                    <?=  $linha['StatusAgendamento'] ?> 
                    </div>
                <?php endif ?>
                <?php if($linha['StatusAgendamento'] == 'Cliente faltou'): ?>
                    <div id="agendado" style="background:red;color:white; padding:10px 10px; text-align:center; border-radius:5px;">
                    <?=  $linha['StatusAgendamento'] ?> 
                    </div>
                <?php endif ?>
                <?php if($linha['StatusAgendamento'] == 'Cancelado'): ?>
                    <div id="agendado" style="background:darkviolet;color:white; padding:10px 10px; text-align:center; border-radius:5px;">
                    <?=  $linha['StatusAgendamento'] ?> 
                    </div>
                <?php endif ?>
                </td>
                <td><?=  $linha['NomeProcedimento'] ?></td>
                <td><?=  $linha['Preco']?></td>
                <td><?= implode("/", array_reverse(explode("-", $linha['Data_agendamento']))) ?></td>
                <td><?=  $linha['Hora'] ?></td>
                <td><?=  $linha['Barbearia'] ?></td>
                </tr>
                
            </tbody>
            <?php } ?>

            </table>
        
</div>
 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

<?php require_once("../componentes/rodape.php") ?>



</html>