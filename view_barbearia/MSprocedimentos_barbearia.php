<?php

  require_once("../controladorBarbearia/MSsessao_barbearia.php");
?>
<?php


  $conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");
 
  $barbearia = "SELECT * FROM tbbarbearia WHERE CodigoBarbearia = {$_SESSION['CodigoBarbearia']}";
  $reBar = mysqli_query($conexao, $barbearia);
  $linhaBar = mysqli_fetch_array($reBar);

  $sqlProcedimento = "SELECT * FROM tbprocedimento WHERE tbBarbearia_Codigo =  {$_SESSION['CodigoBarbearia']}";

  $resultado = mysqli_query($conexao, $sqlProcedimento); //Faz a consulta na tabela
  $linha = mysqli_fetch_array($resultado);  //Faz a listagem dos procedimentos
  $qtd = mysqli_num_rows($resultado); //Conta a quantidade de registros da tabela


  if(isset($_POST['excluir'])){
      $codigo = $_POST['codigo'];
        $sqlExcluir = "DELETE FROM tbprocedimento WHERE Codigo = {$codigo}";

      mysqli_query($conexao, $sqlExcluir);

      $mensagemExclusao = "Procedimento excluido";
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="../imagens/logo_com_fundo.png" type="image/x-icon">
    <link rel="stylesheet" href="../barbearia_arquivos_css/MSprocedimentos_barbearia.css">
    <title>Mestre-Sala</title>
</head>
<body>
    <?php require_once("../componentes/menuBarbearia.php"); ?>
    <div class="espacamento">
<h1 style="color:white;"><?= $_SESSION['NomeBarbearia'] ?></h1>
</div>
<div class="pg_principal container">

            <div class="alert alert-info" role="alert" id="alerta">
                    <h4 class="alert-heading">Cadastre um novo procedimento em sua barbearia</h4>
                    <p>Cadastre agora mesmo um novo procedimento que sua barbearia pode oferecer.</p>
                    <hr>
                    <div class="container text-left">
                          <div class="row row-cols-auto">
                                <div class="col">
                                    <a href="MScadProcedimento.php" >
                                    <button class="btn btn-primary" id="cadProcedimento"><i class="fas fa-user-plus"></i> Novo procedimento</button>
                                    </a>
                                </div>
                                <div class="col">
                                <form action="../controladorBarbearia/gerarPDFprocedimentos.php" method="post">
                                    <input type="hidden" name="codBarbearia" value="<?= $linhaBar['CodigoBarbearia'] ?>">
                                    <button type="submit" id="imprimir" class="btn btn-primary" href="../controladorBarbearia/gerarPDFprocedimentos.php"><i class="fas fa-file-alt"></i>  Imprimir</button>
                                </form>
                                </div>
                          </div>
                          </div>
                    
                   
                    
            </div>
            <?php if(isset($_GET['mensagem'])) { ?>
                        <div class="alert alert-success" role="alert">
                           <h4><i class="fas fa-check"></i> <?php echo $_GET['mensagem'] ?></h4>
                        </div>
            <?php } ?>
            <?php if(isset($mensagemExclusao)) { ?>
                        <div class="alert alert-success" role="alert" id="alerta_exclusão">
                          <h4><i class="fas fa-times"></i> <?= $mensagemExclusao ?></h4>
                        </div>
            <?php } ?>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                    
                    <th scope="col">Status</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Tempo </th>
                    <th scope="col">Alterar/Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($linha = mysqli_fetch_array($resultado)){ ?>
                    <tr>
                        
                        <td><?= $linha['StatusProcedimento'] ?></td>
                        <td><?= $linha['NomeProcedimento'] ?></td>
                        <td><?= $linha['Descricao']?></td>
                        <td><?= $linha['Valor'] ?></td>
                        <td><?= $linha['Tempo_estimado'] ?></td>
                        <td class="d-flex">
                        <form action="MSalterarProcedimento.php" method="post">
                            <input type="hidden" name="codigo" value="<?= $linha['Codigo']?>">
                                <button type="submit" style="background: blue;border:none;" class="btn btn-primary"><i class="fas fa-pen"></i></button>
                            
                        </form>
                        <form action="MSprocedimentos_barbearia.php" method="post">
                            <input type="hidden" name="codigo" value="<?= $linha['Codigo']?>">
                            <button type="submit" class="btn btn-danger" style="background: red;border:none;margin:0px 10px" onclick="alert('Deseja excluir este procedimento ?')" name="excluir"><i class="fas fa-trash-alt"></i></button>
                        </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
    <?php require_once("../componentes/rodape.php") ?>
    <?php mysqli_close($conexao) ?>
</html>