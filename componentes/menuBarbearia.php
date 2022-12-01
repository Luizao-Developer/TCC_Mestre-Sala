<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="MStelaprincipal_barbearia.php">
            <img src="../imagens/logo_com_fundo.png" alt="" width="70" height="64" class="d-inline-block align-text-top" style="border-radius:50%;">
           
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
                <a class="nav-link" href="..\view_barbearia\MSprocedimentos_barbearia.php"><i class="fas fa-cut"></i>  Procedimentos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="..\view_barbearia\MSservicomarcados_barbearia.php"><i class="fas fa-calendar-alt"></i> Serviços marcados</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="..\view_barbearia\MSlistaclientes_barbearia.php"><i class="fas fa-users"></i> Meus clientes</a>
                </li>

                
            </ul>
            
                    <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" id="contaBotao" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                             <i class="fas fa-store-alt"></i> <?= $_SESSION['NomeBarbearia'] ?>

                    </button>
                    <ul class="dropdown-menu">
                        <li><a id="sair_sessao" type="button"class="dropdown-item" href="../controladorBarbearia/MSencerraSessao_barbearia.php"><i class="fas fa-door-open"></i> Sair</a>
                          
                        </li>
                       </ul>
                    </div>


                                   <!-- Informações da conta -->
                  
            </div>
        </div>
        </nav>
