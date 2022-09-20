<?php
    require_once("../controladorBarbearia/MSsessao_barbearia.php");

  
?>
<?php 

    $conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");
//Consulta sobre os funcionários
    $sql  = "select * from tbfuncionarios 
    where 1 = 1  order by Nome ";



$result = mysqli_query($conexao,$sql);
$linha = mysqli_fetch_array($result);
$qtdFuncionarios = mysqli_num_rows($result);

//Consulta sobre os funcionários que estão de licença ou afastados

$sqlLicenca = "select * from tbfuncionarios where 1 = 1 and Status like 'Em licença%'";
$result2 = mysqli_query($conexao, $sqlLicenca);
$linha2 = mysqli_fetch_array($result2);
$qtdFuncionariosLicenca = mysqli_num_rows($result2);

if($qtdFuncionariosLicenca == 0){
    $mensagemLicenca = 'Nenhum';
}else{
    $mensagemLicenca = $qtdFuncionariosLicenca;
}

//Consulta a quantidade de clientes que a barbearia possui

$sqlClientes = "select * from tbcliente";

$resultCliente = mysqli_query($conexao, $sqlClientes);
$qtdClientes = mysqli_num_rows($resultCliente);

$msgQtdCliente = "";
if($qtdClientes == 0){
    $msgQtdCliente = "nenhum cliente cadastrado";

}else{
    $msgQtdCliente = $qtdClientes ;
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
    <link rel="stylesheet" href="../barbearia_arquivos_css/MStelaprincipal_barbearia.css">
    <title>Mestre-Sala</title>
</head>
<body>

    <!--Menu do barbeiro--->
    
    <?php require_once("../componentes/menuBarbearia.php"); ?>


<!--Continuação do site-->
<div class="espacamento">
<h1 style="color:white;"><?= $_SESSION['NomeBarbearia'] ?></h1>
</div>
<div class="pg_principal ">

    <div class="position-absolute" id="tabela_informacoes">
            <div class="card" style="width: 48rem;">
            <div class="card-body">
                <div class="alert alert-info" role="alert">
                        <h2>Minha barbearia: </h2>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <h5><i class="fas fa-address-card"></i> Esta barbearia possui <?= $qtdFuncionarios ?> funcionários </h5>
                    <p>
                    <i class="fas fa-file-signature"></i>  <?= $mensagemLicenca ?> funcionário(s) permanece(m) sob licença
                    </p></li>
                    <li class="list-group-item"><h5><i class="fas fa-users"></i> Esta barbearia possui <?= $qtdClientes , " clientes" ?> </h5></li>
                    <li class="list-group-item">A third item</li>
                </ul>
            </div>
    </div>
    </div>
    <!--Card de informações-->
    <div class="card position-absolute top-20 start-0" style="width: 18rem;">
    <img src="../imagens/barber-1453064_1920.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title" name="nome_barberia"><i class="fas fa-store-alt"></i> <?= $_SESSION['NomeBarbearia'] ?></h5>
        <h5 class="card-title" name="nome_barberia"> <?= $_SESSION['NomeAdmin'] ?></h5>

        <p class="card-text" name="endereco"><?= $_SESSION['Endereco'] ?></p>
        <p class="card-text" name="cidade"><?= $_SESSION['Cidade'] ?></p>
        <p class="card-text" name="estado"><? $_SESSION['Estado'] ?></p>
        <p class="card-text" name="cep"><?= $_SESSION['CEP'] ?></p>
        <p class="card-text" name="face"><?= $_SESSION['Facebook'] ?></p>
        <p class="card-text" name="insta"><?= $_SESSION['Instagram'] ?></p>
        <p class="card-text" name="status"><?= $_SESSION['Status'] ?></p>
        <p class="card-text" name="status"><i class="fas fa-quote-left"></i> '' <?= $_SESSION['adicional'] ?>''</p>
        <p class="card-text">
        
        </p>
        

                    <!-- Editar informações do card-->
            <form action="../controladorBarbearia/MSatualizaInfo_barbearia.php" method="post" enctype="multipart/form-data">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModa2">
            <i class="fas fa-pen"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--Forms para editar as informações-->
   
                <div class="modal-body">
                    <p>
                        <img src="../imagens/" alt="" srcset="" id="fotoUsuarioSistema">
                        
                    </p>
                    <p>
                        <label for="">Adicione ou atualize de sua barbearia</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="foto" value="<?= $_SESSION['Foto']  ?>">
                            
                        </div>
                    </p>
                    
    
     
                    <p>
                    <div class="row g-3">
                        <div class="col">
                            <label for="">Nome da barbearia</label>
                            <input type="text" class="form-control" aria-label="First name" name="nome_da_barbearia" value="<?= $_SESSION['NomeBarbearia'] ?>">
                        </div>
                        <div class="col">
                            <label for="">Endereço</label>
                            <input type="email" class="form-control"  aria-label="Last name" name="endereco" value="<?= $_SESSION['Endereco'] ?>">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="">Email corporativo</label>
                            <input type="text" class="form-control"  aria-label="First name" name="email" value="<?= $_SESSION['Email'] ?>">
                        </div>
                        <div class="col">
                            <label for="">Cidade</label>
                            <input type="text" class="form-control"  aria-label="Last name" name="cidade" value="<?=  $_SESSION['Cidade'] ?>">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="">UF</label>
                            <input type="text" class="form-control"  aria-label="First name" name="uf" value="<?=$_SESSION['UF'] ?>">
                        </div>
                        <div class="col">
                            <label for="">CEP</label>
                            <input type="text" class="form-control"  aria-label="Last name" name="cep" value="<?= $_SESSION['CEP'] ?>">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="">CNPJ</label>
                            <input type="text" class="form-control" name="cnpj" value="<?= $_SESSION['CNPJ'] ?>"  >
                        </div>
                        <div class="col">
                            <label for="">Telefone comercial</label>
                            <input type="text" class="form-control" name="telefone_comercial" value="<?= $_SESSION['Telefone_comercial'] ?>"  >
                        </div>
                       
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="">Facebook</label>
                            <input type="text" class="form-control" name="facebook" value="<?= $_SESSION['Facebook'] ?>"  >
                        </div>
                        <div class="col">
                            <label for="">Instagram</label>
                            <input type="text" class="form-control" name="instagram" value="<?= $_SESSION['Instagram'] ?>"  >
                        </div>
                       
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="">Status da barbearia</label>
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option selected><?= $_SESSION['Status']?></option>
                                <option>Aberto</option>
                                <option>Fechado temporariamente/tempo indeterminado</option>
                                <option>Em reforma</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="">Telefone do administrador </label>
                            <input type="text" class="form-control" name="telefone_pessoal" value="<?= $_SESSION['Telefone_pessoal'] ?>"  >
                        </div>
                       
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="floatingTextarea2">Adicionam um slogam ou frase</label>
                            <textarea class="form-control" placeholder="Leave a comment here" name="adicional" id="floatingTextarea2" style="height: 100px"></textarea>
                            
                        </div>
                    </div>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>
            </form>
    </div>
    </div>

   

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
<?php require_once("../componentes/rodape.php") ?>
</html>