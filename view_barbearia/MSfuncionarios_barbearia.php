<?php 
require_once("../controladores/MSsessao_barbearia.php");
?>
<?php
    
 
    $conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

    //Esta consulta tem a função de mostrar os funcionários de uma respectiva barbearia, sem mostrar uma lista gigante para todas as barbearias cadastradas
    $sql  = "select * from tbfuncionarios 
    where 1 = 1 ";





$result = mysqli_query($conexao,$sql);
$linha = mysqli_fetch_array($result);
$qtd = mysqli_num_rows($result);
 

if(isset($_POST['excluir'])){

  //Excluir arquivo
  //$imagem = getImagemUsuario($_POST['id'],$conexao);
  //excluiArquivo('arquivos\\'.$imagem);
  
  $Codigo = $_POST['id'];
  $sql = "delete from tbfuncionarios where Codigo = {$Codigo}";
  
  /*$resulta =*/
  mysqli_query($conexao, $sql);
  
  
  $mensagemExclusao =  "Funcionário excluido!";
  
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
    <link rel="stylesheet" href="../barbearia_arquivos_css/MSfuncionarios_barbearia.css">
    <title>Mestre-Sala</title>
</head>
<body>

    <!--Menu do barbeiro--->
    
    <?php require_once("../componentes/menuBarbearia.php"); ?>


<!--Continuação do site-->
<div class="espacamento">
<h1 style="color:white;"><?= $_SESSION['NomeBarbearia'] ?></h1>
</div>
<div class="pg_principal container">

    <h1>Funcionários da barbearia: </h1>
    <!--Tabela de funcionarios-->
        
            <?php if(isset($mensagemExclusao )){ ?>
              <div class="alert alert-danger" role="alert">
                  <h4><i class="fas fa-exclamation-triangle"></i> <?= $mensagemExclusao ?></h4>
              </div>
            <?php } ?>
        
    

     <div id="tabela">
                <!--Cadastro de funcionários-->
                <div class="alert alert-success" role="alert" id="opcoes">
                    <h4 class="alert-heading">Faça aqui o cadastro de novos funcionários</h4>
                    
                    <hr>
                    <p class="mb-0">O botão abaixo acessa o forms de cadastro.</p>
                    

                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModa3" id="comece">
                    <i class="fas fa-edit"></i>
                  </button>
                
          <!-- Modal -->
          <div class="modal fade" id="exampleModa3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Cadastre seu funcionário</h5>
                  <button type="button" class="btn-close btn-close-white"  data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                
                
                <div class="modal-body">
                  <!--CADASTRO DE BARBEARIA-->
                  <form class="row g-3 needs-validation" name="cadFuncionario_barbearia" method="post" action="../controladores/MScadFuncionário_barbearia.php"  novalidate >
                      
                  <div class="col-md-4 position-relative">
                      <label for="nome" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="nome" name="nome"  required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira o nome do funcionário
                      </div>
                    </div>

                    <div class="col-md-4 position-relative">
                      <label for="nome" class="form-label">Telefone</label>
                      <input type="text" class="form-control" id="telefone" name="telefone"  required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira o telefone do funcionário
                      </div>
                    </div>

                    <div class="col-md-4 position-relative">
                      <label for="endereco" class="form-label">Endereço</label>
                      <input type="text" class="form-control" id="endereco" name="endereco"  required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira o endereço de seu funcionário
                      </div>
                    </div>

                    <div class="col-md-4 position-relative">
                      <label for="endereco" class="form-label">Email</label>
                      <input type="text" class="form-control" id="email" name="email" >
                      <div class="valid-tooltip">
                        Email não é obrigatório
                      </div>
                      
                    </div>

                    <div class="col-md-4 position-relative">
                      <label for="cep" class="form-label">CEP</label>
                      <div class="input-group has-validation">
                        
                        <input type="text" class="form-control" id="cep" aria-describedby="validationTooltipUsernamePrepend" name="cep">
                        <div class="valid-tooltip">
                          Cep não é obrigatório
                        </div>
                        
                      </div>

                    </div>

                    <div class="col-md-20 position-relative">
                      <label for="cidade" class="form-label">Cidade</label>
                      <input type="text" class="form-control" id="cidade" name="cidade" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira a cidade de seu funcionário
                      </div>
                    </div>
                      <div class="col-md-20 position-relative">
                        <label for="uf" class="form-label">UF</label>
                        <select class="form-select" id="uf" name="uf" required>
                          <option selected disabled value="">Choose...</option>
                          <option>...</option>
                        </select>
                        <div class="valid-tooltip">
                          Certo!
                        </div>
                        <div class="invalid-tooltip">
                          Selecione a UF(estado) de seu funcionário
                        </div>
                      </div>

                      

                    <div class="col-md-20 position-relative">
                      <label for="cnpj" class="form-label">PIS-PASEP</label>
                      <input type="text" class="form-control" id="pis_pasep" name="pis_pasep" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira o PIS-PASEP de seu funcionário
                      </div>
                    </div>

                    <div class="col-md-20 position-relative">
                      <label for="telefoneComercial" class="form-label">Data de nascimento</label>
                      <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira a data de nascimento do funcionário
                      </div>
                    </div>

 
                    <div class="col-md-20 position-relative">
                      <label for="nomeAdmin" class="form-label">Data de contratação</label>
                      <input type="date" class="form-control" id="data_contratacao" name="data_contratacao" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Por favor insira a data de contratação de seu funcionário
                      </div>
                    </div>

                    

                  

                    <div class="col-md-20 position-relative">
                      <label for="status" class="form-label">Status</label>
                      <select class="form-select" id="status" name="status" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Trabalhando</option>
                        <option>Sob licença</option>
                        
                        
                      </select>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Selecione o status de seu funcionário
                      </div>
                    </div>
                    
                    
                    
                    <div class="col-12">
                      <button class="btn btn-primary" type="submit" id="cadastrar" name="cadastrar">Cadastrar</button>
                    </div>
                    
                  </form>
                  
                </div>
                
              </div>
            </div>
          </div>
        
      </div>
    </div>







<!---
            <div class="alert alert-success" role="alert">
              <h4>A <?=  $_SESSION['NomeBarbearia']?> possui <?= $qtd ?> funcionários</h4>
            </div>
                --->
          
            
                                  
                          <?php
                          while($linha =mysqli_fetch_array($result)) {  ?>
                            <div class="card w-105" id="card_lista">
                                <div class="card-body">
                                  <h5 class="card-title"><?= $linha['Nome'] ?></h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  
                                  <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModa5">
                                            <i class="fas fa-pen"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModa5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                  </div>
                                                  <div class="modal-body">
                                                                  <form class="row g-3 needs-validation" name="editFuncionario_barbearia" method="post" action="../controladores/MSatualizainfo_funcionarioBarbearia.php" >
                                                  <input type="hidden" name="Codigo" id="Codigo" value="<?= $linha['Codigo'] ?>">
                                                  <div class="col-md-4 position-relative">
                                                      <label for="nome" class="form-label">Nome</label>
                                                      <input type="text" class="form-control" id="nome" name="nome" value="<?= $linha['Nome'] ?>" >
                                                      
                                                    </div>

                                                    <div class="col-md-4 position-relative">
                                                      <label for="nome" class="form-label">Telefone</label>
                                                      <input type="text" class="form-control" id="telefone" name="telefone" value="<?= $linha['Telefone']?>">
                                                    
                                                    </div>

                                                    <div class="col-md-4 position-relative">
                                                      <label for="endereco" class="form-label">Endereço</label>
                                                      <input type="text" class="form-control" id="endereco" name="endereco" value="<?= $linha['Endereco']?>">
                                                      
                                                    </div>

                                                    <div class="col-md-4 position-relative">
                                                      <label for="endereco" class="form-label">Email</label>
                                                      <input type="text" class="form-control" id="email" name="email" value="<?= $linha['Email']?>" >
                                                      
                                                      
                                                    </div>

                                                    <div class="col-md-4 position-relative">
                                                      <label for="cep" class="form-label">CEP</label>
                                                      <div class="input-group has-validation">
                                                        
                                                        <input type="text" class="form-control" id="cep" aria-describedby="validationTooltipUsernamePrepend" name="cep" value="<?= $linha['CEP']?>">
                                                        
                                                        
                                                      </div>

                                                    </div>

                                                    <div class="col-md-20 position-relative">
                                                      <label for="cidade" class="form-label">Cidade</label>
                                                      <input type="text" class="form-control" id="cidade" name="cidade" value="<?= $linha['Cidade']?>" >
                                                      
                                                    </div>
                                                    <div class="col-md-20 position-relative">
                                                      <label for="uf" class="form-label">UF</label>
                                                      <select class="form-select" id="uf" name="uf" >
                                                        <option selected><?= $linha['UF']?></option>
                                                        <option>...</option>
                                                      </select>
                                                      
                                                    </div>

                                      

                                                      <div class="col-md-20 position-relative">
                                                        <label for="cnpj" class="form-label">PIS-PASEP</label>
                                                        <input type="text" class="form-control" id="pis_pasep" name="pis_pasep" value="<?= $linha['PIS_PASEP']?>">
                                                        
                                                      </div>

                                                          <div class="col-md-20 position-relative">
                                                          <label for="telefoneComercial" class="form-label">Data de demissão</label>
                                                          <input type="date" class="form-control" id="data_demissao" name="data_demissao" value="<?= $linha['Data_demissao']?>">
                                                        
                                                        </div>
                                                                          

                                                        <div class="col-md-20 position-relative">
                                                          <label for="status" class="form-label">Status</label>
                                                          <select class="form-select" id="status" name="status" >
                                                            <option selected ><?= $linha['Status']?></option>
                                                            <option>Trabalhando</option>
                                                            <option>Sob licença</option>
                                                            <option>Demitido</option>
                                                            
                                                          </select>
                                                        
                                                        </div>
                                    
                                    
                                    
                                                          <div class="col-12">
                                                            <button class="btn btn-primary" type="submit" id="alterar" name="salvar">Salvar</button>
                                                          </div>
                                                          
                                                        </form>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            
                                                                                  <!--Excluir usuario-->
                                                          <form action="../view_barbearia/MSfuncionarios_barbearia.php" method="post" onsubmit="return confirm('Deseja excluir este funcionário?')">
                                                              <input type="hidden" name="id" value="<?= $linha['Codigo'] ?>">
                                                                <button type="submit" class="btn btn-danger" name="excluir"><i class="fas fa-trash"></i></button>
                                                          </form>
                                                          
                                </div>
                          </div>
                          <?php } ?>   
                
     </div>
</div>
    

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
<?php require_once("../componentes/rodape.php") ?>

    <script>
  (() => {
    'use strict'
  
   
    const forms = document.querySelectorAll('.needs-validation')
  
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()
</script>
<?php 
mysqli_close($conexao);
?>
</html>