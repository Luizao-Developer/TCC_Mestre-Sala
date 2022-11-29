<?php

  require_once("../controladorBarbearia/MSsessao_barbearia.php");
?>
<?php

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

$barbearia = "SELECT * FROM tbbarbearia WHERE CodigoBarbearia = {$_SESSION['CodigoBarbearia']}";
$reBar = mysqli_query($conexao, $barbearia);
$linhaBar = mysqli_fetch_array($reBar);

$sql ="SELECT * FROM tbprocedimento
INNER JOIN tbagendamento ON tbagendamento.tbProcedimento_Codigo = tbprocedimento.Codigo
INNER JOIN tbcliente on tbcliente.CodigoCliente = tbagendamento.tbCliente_Codigo
INNER JOIN tbbarbearia on tbbarbearia.CodigoBarbearia = {$_SESSION['CodigoBarbearia']}";


$buscaBanco = mysqli_query($conexao, $sql);


//botoes
if(isset($_POST['edit_agendamento'])){
    $codAgendamento = $_POST['codAgendamento'];

    $deleteAgendamento = "DELETE FROM tbagendamento WHERE CodigoAgendamento = {$codAgendamento}";
    $resul = mysqli_query($conexao, $deleteAgendamento);

    $deletouAgendamento = "Agendamento foi deletado com sucesso!";
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="../imagens/logo_com_fundo.png" type="image/x-icon">
    <link rel="stylesheet" href="../barbearia_arquivos_css/MSservicosAgendados_barbearia.css">
    <title>Mestre-Sala</title>
</head>
<body>
<?php require_once("../componentes/menuBarbearia.php"); ?>

    <div class="espacamento">
<h1 style="color:white;"><?= $_SESSION['NomeBarbearia'] ?></h1>
</div>
<div class="pg_principal container">
<div class="alert alert-primary" role="alert" id="alerta">
            <h4 class="alert-heading">Lista de Agendamentos</h4>
            
            
            <form action="../controladorBarbearia/gerarPDFservicosMarcados.php" method="post">
                <input type="hidden" name="codBarbearia" value="<?= $linhaBar['CodigoBarbearia'] ?>">
                    <button class="btn btn-primary" id="imprimir" type="submit"><i class="fas fa-file-alt"></i> Imprimir</button>

            </form>
            
            
        </div>

        <!--Mensagem exclusão de agendamento-->
        <?php if(isset($deletouAgendamento)): ?>
                <div class="alert alert-primary" role="alert" id="info_del_agenda">
                    
                    <h3><?php echo $deletouAgendamento ?> <i class="fas fa-times"></i></h3>
                    </div>
        <?php endif ?>



        <!--Listagem dos agendamentos de cada cliente-->
        <table class="table table-dark  table-hover">
            <thead>
                <tr>
                <th width="5%">Status</th>
                <th width="5%">Cliente</th>
                <th width="10%">Serviço</th>
                <th width="5%">Preço</th>
                <th width="5%">Data</th>
                <th width="5%">Hora</th>
                <th width="5%">*</th>
                <th width="5%">*</th>
                
                </tr>
            </thead>
            <?php while($linha = mysqli_fetch_array($buscaBanco)) { ?>
            <tbody>
           
                <tr>
                <td>
                    <!--Verificando status do agendamento e fornecendo uma cor para cada tipo de situação-->
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
                <td><?=  $linha['Cliente'] ?></td>
                <td><?=  $linha['NomeProcedimento'] ?></td>
                <td><?=  $linha['Preco']?></td>
                <td><?=  $linha['Data_agendamento']?></td>
                <td><?=  $linha['Hora'] ?></td>

                <!--Botão de alteração-->
            <td>
              
                <button type="button" id="alter_agendamento" style="background:blue;border:none;" name="alter_agendamento" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModa5">
                <i class="fas fa-pen"></i>
                </button>

                
                
                
                
                
               
            </td>
            <!--Botão de exclusão de acordo o status-->
            <td>
            <?php if($linha['StatusAgendamento'] == 'Agendado'): ?>
                    <form action="MSservicomarcados_barbearia.php" method="post">
                        <input type="hidden" name="codAgendamento" value="<?= $linha['CodigoAgendamento'] ?>">
                        <button type="submit"  style="background: red;border:none;" id="edit_agendamento" name="edit_agendamento" class="btn btn-primary" onclick="alert('Deseja excluir este agendamento ?')" data-bs-toggle="modal" disabled >
                        <i class="fas fa-times"></i>
                        </button>
                    </form>
                <?php endif ?>
                <?php if($linha['StatusAgendamento'] == 'Concluido/Em débito'): ?>
                    <form action="MSservicomarcados_barbearia.php" method="post">
                        <input type="hidden" name="codAgendamento" value="<?= $linha['CodigoAgendamento'] ?>">
                        <button type="submit"  style="background: red;border:none;" id="edit_agendamento" name="edit_agendamento" class="btn btn-primary" onclick="alert('Deseja excluir este agendamento ?')" data-bs-toggle="modal" disabled>
                        <i class="fas fa-times"></i>
                        </button>
                    </form>
                <?php endif ?>

                <?php if($linha['StatusAgendamento'] != 'Agendado'){ ?>
                    <form action="MSservicomarcados_barbearia.php" method="post">
                        <input type="hidden" name="codAgendamento" value="<?= $linha['CodigoAgendamento'] ?>">
                        <button type="submit" style="background: red;border:none;" id="edit_agendamento" name="edit_agendamento" class="btn btn-primary" onclick="alert('Deseja excluir este agendamento ?')" data-bs-toggle="modal" >
                        <i class="fas fa-times"></i>
                        </button>
                    </form>
                <?php } ?>
            </td>
                
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