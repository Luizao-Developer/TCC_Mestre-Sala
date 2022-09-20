<?php
 require_once("../controladorBarbearia/MSsessao_barbearia.php");
 /*
  $nome = $_POST['nome']; -
    $telefone = $_POST['telefone']; -
    $endereco = $_POST['endereco']; -
    $email = $_POST['email']; -
    $cep = $_POST['cep']; -
    $cidade = $_POST['cidade']; -
    $uf = $_POST['uf']; -
    $pis_pasep = $_POST['pis_pasep'];
    $data_nascimento = $_POST['data_nascimento'];
    $data_contratacao = $_POST['data_contratacao'];
    $status = $_POST['status']; */
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
    <link rel="stylesheet" href="../barbearia_arquivos_css/MScadastrarFuncionario_barbearia.css">
    <title>Mestre-Sala</title>
</head>
<body>
<div class="espacamento">
<h1 style="color:white;"><?= $_SESSION['NomeBarbearia'] ?></h1>
</div>
<div class="pg_principal container">
    
     <div class="cadastro">
         <form class="row g-3 needs-validation" action="../controladorBarbearia/MScadFuncionário_barbearia.php" method="post" novalidate>
         <h1>Cadastro de funcionário</h1>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="validationCustom01" name="nome" required>
                        <div class="valid-feedback">
                           Certo!
                        </div>
                        <div class="invalid-feedback">
                        Insira o nome de seu funcionário
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="validationCustom02" name="telefone" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                         Insira o telefone de seu funcionário
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Email</label>
                        <input type="text" class="form-control" id="validationCustom02" name="email" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                         Insira o email de seu funcionário
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="validationCustom02" name="endereco" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                         Insira o endereço de seu funcionário
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="validationCustom02" name="cep" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom03" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="validationCustom03" name="cidade" required>
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
                        <option selected disabled value="">Escolha....</option>
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
                        <label for="validationCustom02" class="form-label">PIS-PASEP</label>
                        <input type="text" class="form-control" id="validationCustom02" name="pis_pasep" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                        Insira o PIS PASEP de seu funcionário
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Data de nascimento</label>
                        <input type="date" class="form-control" id="validationCustom02" name="data_nascimento" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                        Insira a data de nascimento de seu funcionário
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Data de contratação</label>
                        <input type="date" class="form-control" id="validationCustom02" name="data_contratacao" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                        Insira a data de contratação de seu funcionário
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom04" class="form-label">Status</label>
                        <select class="form-select" id="validationCustom04" name="status" required>
                        <option selected disabled value="">Escolha....</option>
                        <option>Trabalhando</option>
                        <option>Em licença</option>
                        </select>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                        Insira o estado que o funcionário reside
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" id="cadastrar" name="cadastrar">Cadastrar</button>
                    </div>

         </form>
     </div>
</div>
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
