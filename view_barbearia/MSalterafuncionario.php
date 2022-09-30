<?php
 require_once("../controladorBarbearia/MSsessao_barbearia.php");

?>
<?php 


$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

$Codigo = $_POST['codigo'];
if(isset($_POST['salvar'])){

    

    $nome  = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $status = $_POST['status'];
    $data_demissao = $_POST['data_demissao'];

    $sqlAtualizaFuncionario = "update tbfuncionarios 
    set Telefone = '{$telefone}',
    Nome = '{$nome}',
    Endereco = '{$endereco}',
    Cidade = '{$cidade}',
    CEP = '{$cep}',
    UF = '{$uf}',
    Email = '{$email}',
    Status = '{$status}',
    data_demissao = '{$data_demissao}'
    where Codigo = {$Codigo}";

    mysqli_query($conexao, $sqlAtualizaFuncionario);
 
    $mensagem = "Informações de funcionario foram alteradas! ";
    
    header("location: MSfuncionarios_barbearia.php?mensagem={$mensagem}");

    
}

$sqlFuncionario = "select * from tbfuncionarios where Codigo = {$Codigo}";
$resultFuncionario = mysqli_query($conexao, $sqlFuncionario);
$linhaFuncionario = mysqli_fetch_array($resultFuncionario);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="../imagens/logo_com_fundo.png" type="image/x-icon">
    <link rel="stylesheet" href="../barbearia_arquivos_css/MSalterafuncionario_barbearia.css">
    <title>Mestre-Sala</title>
</head>
<body>
<div class="espacamento">
<h1 style="color:white;"><?= $_SESSION['NomeBarbearia'] ?></h1>
</div>
<div class="pg_principal container">
    
     <div class="cadastro">
         <form class="row g-3 needs-validation" action="" method="post" novalidate>
         <input type="hidden" name="codigo" value="<?= $_POST['codigo'] ?>">
         <h1>Alteração de funcionario</h1>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="validationCustom01" name="nome" value="<?= $linhaFuncionario['Nome'] ?>" required>
                        <div class="valid-feedback">
                           Certo!
                        </div>
                        <div class="invalid-feedback">
                        Insira o nome de seu funcionário
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="validationCustom02" name="telefone" value="<?= $linhaFuncionario['Telefone']  ?>" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                         Insira o telefone de seu funcionário
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Email</label>
                        <input type="text" class="form-control" id="validationCustom02" name="email" value="<?= $linhaFuncionario['Email']  ?>" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                         Insira o email de seu funcionário
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="validationCustom02" name="endereco" value="<?= $linhaFuncionario['Endereco']  ?>" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                         Insira o endereço de seu funcionário
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="validationCustom02" value="<?= $linhaFuncionario['CEP'] ?>" name="cep" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom03" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="validationCustom03" name="cidade" value="<?= $linhaFuncionario['Cidade']  ?>" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                         Insira a cidade de seu funcionário
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom04" class="form-label">UF</label>
                        <select class="form-select" id="validationCustom04" name="uf" required>
                        <option selected disabled value=""><?= $linhaFuncionario['UF'] ?></option>
                        <option>...</option>
                        </select>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                        Insira o estado que o funcionário reside
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-md-4">
                        <label for="validationCustom04" class="form-label">Status</label>
                        <select class="form-select" id="validationCustom04" name="status" required>
                        <option selected disabled value=""><?= $linhaFuncionario['Status'] ?></option>
                        <option>Trabalhando</option>
                        <option>Demitido</option>
                        <option>Em licença</option>
                        </select>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                        Insira o estado que o funcionário reside
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom04" class="form-label">Data de demissão</label>
                        <input type="text" class="form-control" id="validationCustom03" name="data_demissao" value="<?= $linhaFuncionario['Data_demissao']  ?>">
                        <div class="valid-feedback">
                        Certo!
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" id="cadastrar" name="salvar">Salvar</button>
                    </div>

         </form>
     </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
<?php require_once("../componentes/rodape.php") ?>
<script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
            (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
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
</html>
