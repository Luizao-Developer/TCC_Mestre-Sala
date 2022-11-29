<?php
    require_once("../controladorBarbearia/MSsessao_barbearia.php");

  
?>
<?php

    $conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

    $consultaClientes = "SELECT * FROM tbcliente
                        INNER JOIN tbbarbearias_clientes
                        ON tbbarbearias_clientes.Codigo_Cliente = tbcliente.CodigoCliente";
    $consultandoNoBanco = mysqli_query($conexao, $consultaClientes);
    


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
    <link rel="stylesheet" href="../barbearia_arquivos_css/MSlistaclientes_barbearia.css">
    <title>Mestre-Sala</title>
</head>
<style>

</style>
<body>

    <!--Menu do barbeiro--->
    
    <?php require_once("../componentes/menuBarbearia.php"); ?>


<!--Continuação do site-->
<div class="espacamento">

</div>
<div class="pg_principal container">
      <div class="alert alert-primary" role="alert" id="alerta">
           <h1>Seu(s) cliente(s):</h1>
           <a href="../controladorBarbearia/gerarPDFclientes.php">
                          <button class="btn btn-primary" id="imprimir"><i class="fas fa-file-alt"></i> Imprimir</button>
    </a>
       </div>

   
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col" width="10%">#</th>
      <th scope="col">Cliente(s)</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
   
    </tr>
  </thead>
  <?php while($listando = mysqli_fetch_array($consultandoNoBanco)): ?>
  <tbody>
    <tr>
      <th scope="row">
            <img src="<?php echo "../upload/" . $listando['Foto'] ?>" alt="" srcset="" id="foto_tabela" style="width: 50px; height: 50px; border-radius: 50%;">
      </th>
      <td><h2><?= $listando['Nome']?></h2></td>
      <td><h2><?= $listando['EmailCliente']?></h2></td>
      <td><h2><?= $listando['Telefone']?></h2></td>
     
    </tr>
   
  </tbody>
  <?php endwhile ?>
</table>
</div>
    


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
<?php require_once("../componentes/rodape.php") ?>
</html>