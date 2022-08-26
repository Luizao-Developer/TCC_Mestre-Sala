<?php

require_once("controladores/MSsessao_cliente.php");
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
    <link rel="stylesheet" href="arquivos_css/MStelaprincipal_cliente.css">
    <title>Mestre-Sala</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;

}
body{
    background: darkred;
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
footer .nav{
    background: black;
    padding: 20px;
    color: white;
}
.nav li img{
    border-radius: 50%;
}
#filtro{
    padding-bottom:20px;
}
#filtro input{
    margin: 10px 10px;
    border-radius: 5px;
}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="MStelaprincipal_cliente.php">
            <img src="imagens/logo_com_fundo.png" alt="" width="70" height="64" class="d-inline-block align-text-top" style="border-radius:50%;">
            
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <li class="nav-item">
                <a class="nav-link" href="MSagendamentos_cliente.php"><i class="far fa-calendar-alt"></i> Meus agendamentos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="MSlistabarbearia_cliente.php"><i class="fas fa-search"></i> Pesquisar uma barbearia</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="MSondesoucliente_cliente.php"><i class="fas fa-user-tag"></i> Onde sou cliente</a>
                </li>
            </ul>
           


                                    <!-- Informações da conta -->
                    <button type="button" class="btn btn-primary" id="contaBotao" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-user"></i> <?= $_SESSION['Nome_de_usuario']?>
                    </button>

                    <!-- Modal -->
                    <form action="controladores/MSencerraSessao_cliente.php" method="post">
                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sua conta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>
                                <h1><?= $_SESSION['Nome_de_usuario'] ?></h1>
                            </p>
                            <p>
                                <p><?= $_SESSION['Nome'] ?></p>
                            </p>
                           
                        </div>
                        <div class="modal-footer">
                            
                            <button type="submit" class="btn btn-danger" style="background:red; border:none; border-radius:5px; padding:10px 30px; font-size:larger;"><i class="fas fa-door-open"></i> Sair </button>
                        </div>
                        </div>
                    </div>
                    </div>
                    </form>
                
            </div>
        </div>
        </nav>
<div class="espacamento">

</div>
<div class="pg_principal container">

       <!--Form de realizar agendamento-->
                    <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
                </form>
        
</div>
 

</body>

<?php require_once("componentes/rodape.php") ?>



</html>