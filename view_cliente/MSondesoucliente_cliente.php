<?php

require_once("../controladorCliente/MSsessao_cliente.php");
?>
<?php 
$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");


//Selecionar cliente 
$sqlCliente = "SELECT * FROM tbcliente WHERE CodigoCliente = {$_SESSION['CodigoCliente']}";

$conCliente = mysqli_query($conexao, $sqlCliente);
$listCliente = mysqli_fetch_array($conCliente);


$sql = "SELECT * FROM tbbarbearia
            INNER JOIN tbbarbearias_clientes 
            ON tbbarbearias_clientes.Codigo_Barbearia = tbbarbearia.CodigoBarbearia";

        $consultando = mysqli_query($conexao, $sql);

//Excluindo barbearia da lista
if(isset($_POST['deixar_de_ser_cliente'])){
    $CodigoBarbearia = $_POST['CodigoBarbearia'];
    $CodigoCliente = $_POST['CodigoCliente'];

    $sqlDel = "DELETE FROM tbbarbearias_clientes 
    WHERE Codigo_Cliente = {$CodigoCliente} AND Codigo_Barbearia = {$CodigoBarbearia}";

    $resultDel = mysqli_query($conexao, $sqlDel);

}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="../imagens/logo_com_fundo.png" type="image/x-icon">
    <link rel="stylesheet" href="../cliente_arquivos_css/MSondesoucliente_cliente.css">
    <title>Mestre-Sala</title>
</head>

<body>
<?php require_once("../componentes/menuCliente.php"); ?>
<div class="espacamento">

</div>
<div class="pg_principal container">
       <div class="alert alert-primary" role="alert" id="alerta">
        <h1>Cliente na(s) seguinte(s) barbearia(s):</h1>
           
        </div>
        <div class="container text-center" id="area_cards">
        <div class="row row-cols-3">
             <?php while($listando = mysqli_fetch_array($consultando)){ ?>
                <div class="col">
                <!--Cards de barbearias-->
                        <div class="card " style="width: 18rem;" id="card_barbearia">
                            <img src="<?php  echo "../upload/" . $listando['Foto'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $listando['NomeBarbearia'] ?></h5>
                                
                                <p class="card-text"><?= $listando['nomeAdmin'] ?></p>
                                <h6><?= $listando['Status'] ?></h6>

                                 <!--Informações sobre a barbearia-->
                                 <form action="MSinfoBarbearia.php" method="post">
                                    <input type="hidden" name="CodigoBarbearia" value="<?= $listando['CodigoBarbearia'] ?>">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-info"></i> Informações</button>
                                 </form>












                                <hr>
                                <form action="MSrealizarAgendamento_cliente.php" method="post">
                                    <input type="hidden" name="CodigoBarbearia" value="<?= $listando['CodigoBarbearia'] ?>">
                                    <button type="submit" name="ser_cliente" id="ser_cliente" class="btn btn-primary">Realizar agendamento</button>
                                </form>
                                <form action="../controladorBarbearia/MSexcluirCliente.php">
                                    <input type="hidden" name="CodigoBarbearia" value="<?= $listando['CodigoBarbearia']  ?>">
                                    <input type="hidden" name="CodigoCliente" value="<?=  $listCliente['CodigoCliente']?>">
                                    <button type="submit" class="btn btn-danger" name="deixar_de_ser_cliente" id="deixar_de_ser_cliente">Não ser mais cliente</button>
                                </form>

                                
                            </div>
                        </div>

            </div>
            <?php } ?>
        </div>
        </div>
        
</div>
 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>

<?php require_once("../componentes/rodape.php") ?>



</html>