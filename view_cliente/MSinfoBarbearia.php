<?php require_once("../controladorCliente/MSsessao_cliente.php") ?>
<?php 
$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

$CodigoBarbearia = $_POST['CodigoBarbearia'];

$sql = "SELECT * FROM tbbarbearia WHERE CodigoBarbearia = {$CodigoBarbearia}";
$resultado = mysqli_query($conexao, $sql);
$listando = mysqli_fetch_array($resultado);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="../imagens/logo_com_fundo.png" type="image/x-icon">
    <link rel="stylesheet" href="../cliente_arquivos_css/MSinfoBarbearia.css">
</head>
<body>
<?php require_once("../componentes/menuCliente.php"); ?>
<div class="espacamento">

</div>
<div class="pg_principal container">
<div class="alert alert-primary" role="alert" id="alerta">
            <h1><?= $listando['NomeBarbearia'] ?></h1>
</div>
<div class="img">
    <img src="<?php  echo "../upload/" . $listando['Foto'] ?>" alt="" srcset="">
</div>
        <div class="card">
            <div class="card-body">

                    <h2><i class="fas fa-map-marker-alt"></i>  <?= $listando['Endereco'] ?> - <?= $listando['Cidade'] ?> - <?= $listando['Estado'] ?> - <?= $listando['CEP'] ?></h2>
                    <h2>CNPJ: <?= $listando['CNPJ'] ?></h2>
                    <h2>Contatos - Telefone Comercial = <?= $listando['Telefone_comercial'] ?>, Telefone pessoal = <?= $listando['Telefone_pessoal']?></h2>
                    <h2><?= $listando['Email'] ?> - <?= $listando['Facebook'] ?> - <?= $listando['Instagram'] ?></h2>
                    <h2><?= $listando['Status'] ?></h2>
                    <h2>Proprietario <?= $listando['nomeAdmin'] ?></h2>
                        </div>
        </div>
</div>

       

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>
<?php require_once("../componentes/rodape.php") ?>

</html>