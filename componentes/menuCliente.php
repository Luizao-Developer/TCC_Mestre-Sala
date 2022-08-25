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
                <a class="nav-link" href="#"><i class="far fa-calendar-alt"></i> Meus agendamentos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="MSlistabarbearia_cliente.php"><i class="fas fa-search"></i> Pesquisar uma barbearia</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user-tag"></i> Onde sou cliente</a>
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