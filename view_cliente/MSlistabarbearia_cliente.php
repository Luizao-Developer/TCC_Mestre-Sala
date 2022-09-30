<?php

    require_once("../controladorCliente/MSsessao_cliente.php");

    
?>
<?php
$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

    //Realizando a pesquisa por filtro
    $where = "";
    
    if(isset($_POST['filtrar'])){
        
        if(isset($_POST['nome_barbearia'])){
            $where .= "and NomeBarbearia like '%".$_POST['nome_barbearia'] . "%' ";
        }
        if(isset($_POST['cidade_barbearia'])){
            $where .= "and tbbarbearia.Cidade like '%". $_POST['cidade_barbearia'] ."%'";
        }
        if(isset($_POST['email_barbearia'])){
            $where .= "and tbbarbearia.Email like '%". $_POST['email_barbearia'].  "%'";
        }
        if(isset($_POST['nome_admin_barbearia'])){
            $where .= "and tbbarbearia.nomeAdmin like '%".$_POST['nome_admin_barbearia']."%'";
        }
        if(isset($_POST['status_barbearia'])){
            $where .= "and tbbarbearia.Status like '%".$_POST['status_barbearia']."%'";
        }
        
    }




//Buscando a quantidade totais da barbearia
$buscaBarbearia = "SELECT * FROM tbbarbearia WHERE 1 = 1 $where ORDER BY NomeBarbearia ASC";
$resul = mysqli_query($conexao, $buscaBarbearia);
$qtdBarbearias = mysqli_num_rows($resul);


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

                    <div class="alert alert-primary" role="alert">
                    <h4 class="alert-heading">Lista de Barbearias</h4>
                    <p>Veja a que mais te agrada e se torne cliente agora mesmo!</p>
                    <hr>
                    <h5>Ao todo são <?= $qtdBarbearias ?> barbearias cadastradas</h5>
                   
                    </div>
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
                        <button type="submit " name="filtrar" id="filtrar"><i class="fas fa-filter" ></i> Filtrar </button>
                    </div>
            </form> 
        </div>


       

        
        <!--Area dos cards de barbearias-->
        <div class="container text-center" id="area_cards">
        <div class="row row-cols-3">
            <?php while($mostraBarbearia = mysqli_fetch_array($resul)) { ?>
            <div class="col">
                <!--Cards de barbearias-->
                        <div class="card " style="width: 18rem;" id="card_barbearia">
                            <img src="../imagens/place1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $mostraBarbearia['NomeBarbearia'] ?></h5>
                                <p class="card-text"><?= $mostraBarbearia['Cidade'] ?></p>
                                <p class="card-text"><?= $mostraBarbearia['Estado'] ?></p>
                                <p class="card-text"><?= $mostraBarbearia['Endereco'] ?></p>
                                <p class="card-text"><?= $mostraBarbearia['Telefone_comercial'] ?></p>
                                <p class="card-text"><?= $mostraBarbearia['nomeAdmin'] ?></p>
                                <h6><?= $mostraBarbearia['Status'] ?></h6>
                                <a href="" class="btn btn-primary">Quero ser cliente</a>

                                
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