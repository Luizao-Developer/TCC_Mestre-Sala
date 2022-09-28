<?php

require_once("../controladorCliente/MSsessao_cliente.php");
?>
<?php

$conexao - mysqli_connect("127.0.0.1","root","","mestre_sala");


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
       <div class="alert alert-primary" role="alert">
            <h4 class="alert-heading">Realizar agendamento</h4>
            <p>Faça seu agendamento de forma rápida e ordenada</p>
            <hr>
            <p class="mb-0">
                <a href="MSrealizarAgendamentos_cliente">
            <button type="button" class="btn btn-primary"><i class="fas fa-cut"></i> Realizar agendamento</button>
            </a>
            </p>
        </div>
        
</div>
 

</body>

<?php require_once("../componentes/rodape.php") ?>



</html>