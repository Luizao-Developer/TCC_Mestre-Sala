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
                
                <a class="nav-link" href="MSfuncionarios_barbearia.php"><i class="fas fa-address-card"></i> Meus funcionários</a>

                </li>
                <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-cut"></i>  Procedimentos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-calendar-alt"></i> Serviços marcados</a>
                </li>

                
            </ul>
            <form class="d-flex" role="search">
                
                                   <!-- Informações da conta -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" id="contaBotao" data-bs-target="#exampleModal">
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
