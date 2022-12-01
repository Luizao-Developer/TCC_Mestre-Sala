<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="MStelaprincipal_cliente.php">
            <img src="../imagens/logo_com_fundo.png" alt="" width="70" height="64" class="d-inline-block align-text-top" style="border-radius:50%;">
            
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
                                    <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" id="contaBotao" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user"></i> <?= $_SESSION['Nome_de_usuario'] ?>

                    </button>
                    <ul class="dropdown-menu">
                        <li><a id="sair_sessao" type="button"class="dropdown-item" href="../controladorCliente/MSencerraSessao_cliente.php"><i class="fas fa-door-open"></i> Sair</a>
                          
                        </li>
                       </ul>
                    </div>
                
            </div>
        </div>
        </nav>