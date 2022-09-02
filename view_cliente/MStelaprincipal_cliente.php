<?php

require_once("../controladores/MSsessao_cliente.php");
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
    <link rel="stylesheet" href="../cliente_arquivos_css/MStelaprincipal_cliente.css">
    <title>Mestre-Sala</title>
</head>
<style>

</style>
<body onload="horario()">
    <!--Menu do cliente--->

    <?php require_once("../componentes/menuCliente.php"); ?>

<!--Continuação do site-->

<div class="espacamento">

</div>
<div class="pg_principal">


<div id="recebeUsuario">
<h1>Seja bem vindo <?= $_SESSION['Nome_de_usuario']   ?></h1>

</div>



    <!--Card de informações-->
    <div class="card" style="width: 18rem;">
    <img src="../imagens/barber-1453064_1920.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title" name="nome_usuario"><?= $_SESSION['Nome_de_usuario'] ?></h5>
        <p id="Nome_real"><?= $_SESSION['Nome'] ?></p>
        <p><?= $_SESSION['Email'] ?></p>
        <p class="card-text">
            
           
        </p>
        

                    <!-- Editar informações do card-->
            <form action="../controladores/MSatualizaInfo_cliente.php" method="post" enctype="multipart/form-data">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModa2">
            <i class="fas fa-pen"></i>
            </button>
            
            <?php if(isset($_GET['mensagem'])){ ?>
                   <div class="alert alert-success" role="alert">
                            <?php echo $_GET['mensagem'] ?>
                    </div>
            <?php } ?>
            <!-- Modal -->
            
            <input type="hidden" name="Codigo" value="<?= $_SESSION['Codigo'] ?>">
            <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Faça a edição de suas informações</h5>
                                
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    
                </div>
                <div class="modal-body">
                    <p>
                        <img src="/imagens/" alt="" srcset="" id="fotoUsuarioSistema">
                        
                    </p>
                    <p>
                        <label for="">Adicione ou atualize uma foto sua</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="foto" value="<?= $_SESSION['Foto']  ?>">
                            
                        </div>
                    </p>
                     
     
      
    
      
      
    
     
      
     
                    <p>
                    <div class="row g-3">
                        <div class="col">
                            <label for="">Nome de usuario</label>
                            <input type="text" class="form-control" aria-label="First name" name="nome_de_usuario" value="<?= $_SESSION['Nome_de_usuario'] ?>">
                        </div>
                        <div class="col">
                            <label for="">Email</label>
                            <input type="email" class="form-control"  aria-label="Last name" name="email" value="<?= $_SESSION['Email'] ?>">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label for="">Endereço</label>
                            <input type="text" class="form-control"  aria-label="First name" name="endereco" value="<?= $_SESSION['Endereco'] ?>">
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
                            <label for="">Telefone</label>
                            <input type="text" class="form-control" name="telefone" value="<?= $_SESSION['Telefone'] ?>"  >
                        </div>
                       
                    </div>
                   
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
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
<script src="../arquivos_js/MStelaprincipal_cliente.js"></script>
</body>
<?php require_once("../componentes/rodape.php") ?>
</html>