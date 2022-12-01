<?php require_once("../controladorBarbearia/MSsessao_barbearia.php") ?>
<?php
$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

$codigo = $_POST['codAgendamento'];

if(isset($_POST['salvar'])){

    $StatusAgendamento = $_POST['status'];
  
   
    $sqlAtualizacao =  "UPDATE tbagendamento SET StatusAgendamento = '{$StatusAgendamento}' WHERE CodigoAgendamento = {$codigo}" ;

    mysqli_query($conexao, $sqlAtualizacao);

    $mensagemProcedimento = "Informações de procedimento foram atualizadas!";

    header("location: MSservicomarcados_barbearia.php?mensagem = {$mensagemProcedimento}");


}

$sqlAgendamento = "SELECT * FROM tbagendamento WHERE CodigoAgendamento = {$codigo} ";
$resultado = mysqli_query($conexao, $sqlAgendamento);
$linha = mysqli_fetch_array($resultado);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo_com_fundo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="../barbearia_arquivos_css/MSaltAgendamento.css">
    <title>Alterar procedimento</title>
</head>
<body>
    <?php require_once("../componentes/menuBarbearia.php") ?>
    <div class="espacamento">
    <h1 style="color:white;"><?= $_SESSION['NomeBarbearia'] ?></h1>
    </div>
    <div class="pg_principal container">
    <div class="alert alert-primary" role="alert" id="alerta">
            <h2>Alterar informações sobre um procedimento</h2>
            </div>
            <form class="row g-3 needs-validation" action="" method="post" id="alterar" >
                    <!--Cadastro de novo procedimento-->
                       <input type="hidden" name="codAgendamento" value="<?= $_POST['codAgendamento'] ?>">
                        
                        <div class="col-md-6 position-relative">
                        <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" >
                            <option selected="" disabled="" value="<?= $linha['StatusAgendamento'] ?>"><?= $linha['StatusAgendamento'] ?></option>
                            <option value="Agendado">Agendado</option>
                            <option value="Concluido/Em débito">Concluido/Em débito</option>
                            <option value="Concluido/Pago">Concluido/Pago</option>
                            <option value="Cliente faltou">Cliente faltou</option>
                            <option value="Cancelado">Cancelado</option>
                            </select>
                            <div class="invalid-tooltip">
                                Por favor selecione o status do procedimento
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" name="salvar" id="salvar">Salvar</button>
                        </div>
                        
            </form>
    </div>

<script src="/arquivos_js/MScadastro_barbearia.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

</body>
    <?php require_once("../componentes/rodape.php") ?>
<script>
    $(document).ready(function(){
   $("#valor").mask("00,00");
  

})
</script>
</html>