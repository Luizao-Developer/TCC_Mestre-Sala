<?php
    require_once("controladores/MSsessao_barbearia.php");

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagens/logo_com_fundo.png" type="image/x-icon">
    <link rel="stylesheet" href="arquivos_css/MStelaprincipal_barbearia.css">
    <title>Mestre-Sala</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;

}
body{
    background: darkblue;
}
.card{
    border: none;
    margin-top: 50px;
    margin-left: 10px;
    box-shadow: 1px 1px 40px 10px black;
}
.espacamento{
    width: 100%;
    height: 100px;
    background-image: url(imagens/barber-1453064_1920.jpg);
}
.pg_principal{
    width: 100%;
    height: 140vh;
    background-color: darkred;
    padding-top: 30px;
}
ul a{
    border-bottom: solid transparent;
    margin: 10px 5px;
    padding: 1em;
    padding-left: 100px;
    padding: 0 50px;
    text-align: center;
}
ul a:hover{
    border-bottom: solid darkred;
    color: white;
    transition: all .5s;
}
#contaBotao{
    background: darkred;
    border: none;
    border-radius: 5px;
    font-size: larger;

}
#recebeUsuario{
    color: white;
}
.card p{
    color: gray;
}
#fotoUsuarioSistema{
    border: solid 1px black;
    padding: 70px 70px;
    margin-left: 35%;
    border-radius: 50%;
}
</style>
<body>

    <!--Menu do barbeiro--->
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="imagens/logo_com_fundo.png" alt="" width="70" height="64" class="d-inline-block align-text-top" style="border-radius:50%;">
           
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                
                <a class="nav-link" href="#">Links</a>

                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link ">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                
                                   <!-- Informações da conta -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                   <i class="fas fa-store-alt"></i> <?= $_SESSION['NomeBarbearia'] ?>
                    </button>

                    <!-- Modal -->
                    <form action="controladores/MSencerraSessao_barbearia.php" method="post">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Conta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h1><?=  $_SESSION['NomeBarbearia'] ?></h1>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger" style="background:red; border:none; border-radius:5px; padding:10px 30px; font-size:larger;"><i class="fas fa-door-open"></i> Sair </button>
                        </div>
                        </div>
                    </div>
                    </div>
                    </form>
            </form>
            </div>
        </div>
        </nav>

<!--Continuação do site-->
<div class="espacamento">
<h1 style="color:white;"><?= $_SESSION['NomeBarbearia'] ?></h1>
</div>
<div class="pg_principal">

    
    <!--Card de informações-->
    <div class="card" style="width: 18rem;">
    <img src="imagens/barber-1453064_1920.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title" name="nome_barberia"><i class="fas fa-store-alt"></i> <?= $_SESSION['NomeBarbearia'] ?></h5>
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
            <form action="controladores/MSatualizaInfo_barbearia.php" method="post" enctype="multipart/form-data">
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
                        <img src="/imagens/" alt="" srcset="" id="fotoUsuarioSistema">
                        
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
</html>