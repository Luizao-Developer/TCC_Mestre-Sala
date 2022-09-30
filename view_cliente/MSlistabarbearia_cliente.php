<?php

    require_once("../controladorCliente/MSsessao_cliente.php");

    
?>
<?php
$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

    //Realizando a pesquisa por filtro
    $where = "";
    if(isset($_POST['filtrar'])){
        
        if(isset($_POST['nome_barbearia'])){
            $where .= "and NomeBarbearia like '%".$_POST['nome'] . "%' ";
        }
        if(isset($_POST['cidade_barbearia'])){
            $where .= "and Cidade like '%". $_POST['cidade_barbearia'] ."%'";
        }
        if(isset($_POST['email_barbearia'])){
            $where .= "and Email like '%". $_POST['email_barbearia'].  "%'";
        }
        if(isset($_POST['nome_admin_barbearia'])){
            $where .= "and nomeAdmin like '%".$_POST['nome_admin_barbearia']."%'";
        }
    }

$buscaBarbearia = "SELECT * FROM tbbarbearia $where ORDER BY NomeBarbearia";
$resul = mysqli_query($conexao, $buscaBarbearia);

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
    <link rel="stylesheet" href="../cliente_arquivos_css/MSlistabarbearia_cliente.css">
    <title>Mestre-Sala</title>
</head>
<body>
<?php require_once("../componentes/menuCliente.php"); ?>
<div class="espacamento">

</div>
<div class="pg_principal container">

        <!--Area de filtro-->
        <div id="filtro">
            <div class="input-group mb-3">
            <form action="" class="row g-3 " method="post">
                                <div class="col-md-4">
                                <input type="text" class="form-control" name="nome_barbearia" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nome da barbearia">
                                </div> 
                                <div class="col-md-4">            
                                <input type="text" class="form-control" name="cidade_barbearia" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Cidade">
                                </div>  
                                <div class="col-md-4">
                                <input type="text" class="form-control" name="email_barbearia" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Email da barbearia">
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" name="nome_admin_barbearia" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nome Administrador">
                                </div>
                            </div>
                    <div class="mb-3 col-md-4">
                            <select class="form-select" aria-label="Default select example" name="status_barbearia">
                                <option value="" selected>Escolha...</option>
                                <option value="aberto">Aberto</option>
                                <option value="fechado">Fechado temporariamente/tempo indeterminado</option>
                                <option value="reforma">Em reforma</option>
                            </select>
                    </div>
                    <div id="botao">
                        <button class="submit "><i class="fas fa-filter" name="filtrar"></i> Filtrar </button>
                    </div>
            </form> 
        </div>

        
        <!--Area dos cards de barbearias-->
        <div class="container text-center" id="area_cards">
        <div class="row row-cols-4">
            <?php while($mostraBarbearia = mysqli_fetch_array($resul)) { ?>
            <div class="col">
                <!--Cards de barbearias-->
                        <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;" id="card_barbearia">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $mostraBarbearia['NomeBarbearia'] ?></h5>
                                <p class="card-text"><?= $mostraBarbearia['Cidade'] ?></p>
                                <p class="card-text"><?= $mostraBarbearia['Estado'] ?></p>
                                <p class="card-text"><?= $mostraBarbearia['Endereco'] ?></p>
                                <p class="card-text"><?= $mostraBarbearia['Telefone_comercial'] ?></p>
                                <p class="card-text"><?= $mostraBarbearia['nomeAdmin'] ?></p>
                                <a href="#" class="btn btn-primary">Quero ser cliente</a>

                                
                            </div>
                        </div>

            </div>
            <?php } ?>
            
        </div>
</div>
</div>

 

</body>

<?php require_once("../componentes/rodape.php") ?>



</html>