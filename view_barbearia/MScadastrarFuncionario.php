<?php
 require_once("../controladorBarbearia/MSsessao_barbearia.php");
 
    
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
             <!--Codigo da barbearia -->

             <input type="hidden" name="codigoBarbearia" value="<?= $_SESSION['CodigoBarbearia'] ?>">

            <!---->
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
                        <input type="text" class="form-control" id="cep" name="cep" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom03" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                         Insira a cidade de seu funcionário
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom04" class="form-label">UF</label>
                        <select class="form-select" id="uf" name="uf" required>
                        <option selected disabled value="">Escolha....</option>
                        <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
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
                        <input type="text" class="form-control" id="pis_pasep" name="pis_pasep" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                        Insira o PIS PASEP de seu funcionário
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">RG</label>
                        <input type="text" class="form-control" id="rg" name="rg" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                        Insira o RG de seu funcionário
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required>
                        <div class="valid-feedback">
                        Certo!
                        </div>
                        <div class="invalid-feedback">
                        Insira o CPF de seu funcionário
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Data de nascimento</label>
                        <input type="date" class="form-control" id="dataNascimento" name="data_nascimento" required>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

</body>
<?php require_once("../componentes/rodape.php") ?>
<script>
    $(document).ready(function(){
             $("#cep").mask("00000-000");
             $("#pis_pasep").mask("00000000000");
             $("#cpf").mask("000.000.000-00")
    })
    //Validando data de nascimento
  $("#dataNascimento").change(function(){
     var dn = $(this).val();

     var dataAtual = new Date();
     
     var dataNascimento = new Date(dn);   //VERIFICAR

     if(dataNascimento < dataAtual){
        return TRUE;
     }else{
       alert("Data de nascimento inválida! ")
       return FALSE;
       
     }
  })
  //Buscando CEP  do cliente
  $("#cep").change(function(){
    var cep = $(this).val();
    var url = "http://viacep.com.br/ws/"+ cep + "/json/"
    $.ajax({
      url:url,
      type: 'GET',
      success: function(response){
         $("#uf").val( response.uf ),
         $("#cidade").val(response.localidade);
      },
      error: function(){
          alert("Erro ao buscar CEP");
      }
    })
})
</script>
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
