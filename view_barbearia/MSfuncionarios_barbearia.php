<?php 
require_once("../controladorBarbearia/MSsessao_barbearia.php");
?>
<?php
    
 
  $conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");


    //Esta consulta tem a função de mostrar os funcionários de uma respectiva barbearia, sem mostrar uma lista gigante para todas as barbearias cadastradas
  $sqlFuncionarios  = "select * from tbfuncionarios 
  where 1 = 1 order by Nome and tbBarbearia_Codigo = {$_SESSION['CodigoBarbearia']} ";

 



  $result = mysqli_query($conexao,$sqlFuncionarios);
  $linha = mysqli_fetch_array($result);
  $qtd = mysqli_num_rows($result);
 

if(isset($_POST['excluir'])){

  //Excluir arquivo
  //$imagem = getImagemUsuario($_POST['id'],$conexao);
  //excluiArquivo('arquivos\\'.$imagem);
  
  $Codigo = $_POST['Codigo'];
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
            <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading">Cadastre um funcionário novo agora mesmo!</h4>
                    <p>Aqui é possivel cadastrar novos funcionários além de ter acesso a uma informação detalhada sobre estes de forma rápida e fácil, também é possivel fazer o controle de todos os contratados.</p>
                    <hr>
                    <a href="MScadastrarFuncionario.php" >
                    <button class="btn btn-primary"><i class="fas fa-user-plus"></i> Novo Funcionário</button>
                    </a>
            </div>
            <?php if(isset($_GET['msgNovoFuncionario'])) { ?>
                      <div class="alert alert-info" role="alert">
                          <h4><i class="fas fa-user-plus"></i> <?php echo $_GET['msgNovoFuncionario']?></h4>
                      </div>
            <?php } ?>
            <?php if(isset($_GET['mensagem'])) { ?>
                        <div class="alert alert-success" role="alert">
                           <h4><i class="fas fa-check"></i> <?php echo $_GET['mensagem'] ?></h4>
                        </div>
            <?php } ?>
            <?php if(isset($mensagemExclusao)) { ?>
                        <div class="alert alert-success" role="alert">
                          <h4><i class="fas fa-times"></i> <?= $mensagemExclusao ?></h4>
                        </div>
            <?php } ?>
            
            <div class="flex-container ">
            <?php while($linha = mysqli_fetch_array($result)){ ?>
                      <div class="card" style="width: 18rem; margin: 0 50px ;">
                            <div class="card-body">
                                  <div class="alert alert-info" role="alert">
                                  <h5 class="card-title"><i class="fas fa-user"></i> <?= $linha['Nome'] ?></h5>
                                  </div>
                              
                              
                              <p class="card-text"><i class="fas fa-mobile"></i> Telefone: <?= $linha['Telefone'] ?></p>
                              
                              <p> <i class="fas fa-envelope"></i> Email:  <?= $linha['Email'] ?></p>
                              
                              <p class="card-text"><i class="fas fa-map-marker"></i> Endereço: <?= $linha['Endereco'] ?></p>
                              <p> <i class="fas fa-city"></i> Cidade: <?= $linha['Cidade'] ?></p>
                              <p class="card-text"><i class="fas fa-map-marker-alt"></i> CEP: <?= $linha['CEP'] ?></p>
                              <p>  <i class="fas fa-map"></i> UF: <?= $linha['UF'] ?></p>
                              
                              <p class="card-text"></p>
                              <p class="card-text"><i class="fas fa-file-signature"></i> PIS-PASEP: <?= $linha['PIS_PASEP'] ?></p>
                              <p class="card-text"><i class="fas fa-sun"></i> Data de nascimento <?= $linha['Data_nascimento'] ?></p>
                              <p class="card-text">Trabalhando desde <?= $linha['Data_contratacao'] ?></p>
                              <p class="card-text"><?= $linha['Status'] ?></p>

                              <!--Alterar-->
                              <div class="d-grid gap-2" id="grupo_botoes">
                                <form action="MSalterafuncionario.php" method="post">
                                  <input type="hidden" name="codigo" value= "<?= $linha['Codigo'] ?>">
                                  <a href="MSalterafuncionario.php">
                                  <button  class="btn btn-primary" style="width:250px;"><i class="fas fa-pen"></i></button>
                                  </a>
                                  </form>
                                  <!-- Excluir -->
                                  <form action="MSfuncionarios_barbearia.php" method="post">
                                    <input type="hidden" name="Codigo" value="<?= $linha['Codigo'] ?>">
                                        <button type="submit" style="width:250px;" class="btn btn-danger" name="excluir"><i class="fas fa-trash-alt"></i></button>
                                  </form>
                              </div>

                            </div>
                      </div>
            <?php } ?>
            </div>
            
            
        
    

   
                
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