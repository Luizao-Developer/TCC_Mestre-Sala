<?php

require_once("../controladorCliente/MSsessao_cliente.php");
?>
<?php
/*
Codigo
StatusAgendamento
Servico
Preco
Data
Hora
tbProcedimento_Codigo
tbCliente_Codigo
tbBarbearia_Codigo


*/

$conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");
$CodigoBarbearia = $_POST['CodigoBarbearia'];

$buscandoBarbearia = "SELECT * FROM tbbarbearia WHERE CodigoBarbearia = {$CodigoBarbearia}";

$resul = mysqli_query($conexao, $buscandoBarbearia);
$mostrandoBarbearia = mysqli_fetch_array($resul);

//Pesquisando procedimentos referente a barbearia setada
$buscandoProcedimento = "SELECT * FROM tbprocedimento
                        INNER JOIN tbbarbearia
                        ON tbprocedimento.tbBarbearia_Codigo = tbbarbearia.CodigoBarbearia ";
$consultando = mysqli_query($conexao, $buscandoProcedimento);



//Selecionando a hora dos agendamentos
/*
$sqlHora = "SELECT Hora FROM tbagendamento 
INNER JOIN tbbarbearia on tbbarbearia.CodigoBarbearia = {$CodigoBarbearia};
INNER JOIN tbagendamento.tbBarbearia_Codigo = {$CodigoBarbearia}";

$buscaHora = mysqli_query($conexao, $sqlHora);
*/
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
    <link rel="stylesheet" href="../cliente_arquivos_css/MSrealizarAgendamentos_cliente.css">
    <title>Mestre-Sala</title>
</head>

<body>
<?php require_once("../componentes/menuCliente.php"); ?>
<div class="espacamento">

</div>
<div class="pg_principal container">
<div class="alert alert-primary" role="alert" id="alerta">
  <h2>Realizar agendamento</h2>
</div>
       <!--Form de realizar agendamento
    Servico-
Preco-
Data-
Hora-
tbProcedimento_Codigo-

tbBarbearia_Codigo-->
            <form action="../controladorCliente/MSrealizarAgendamento.php" id="agendar" method="POST" class="row g-3 needs-validation"  novalidate>
                <input type="hidden" name="CodigoCliente" value="<?= $_SESSION['CodigoCliente'] ?>">
                <input type="hidden" name="CodigoBarbearia" value="<?= $_POST['CodigoBarbearia']  ?>">
                <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Barbearia</label>
                    <input type="text" name="barbearia" class="form-control" id="inputEmail4" value="<?= $mostrandoBarbearia['NomeBarbearia'] ?>" >
                   
                </div>
                <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Cliente</label>
                    <input type="text" name="cliente" class="form-control" id="inputEmail4" value="<?= $_SESSION['Nome'] ?>" >
                   
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Procedimento</label>
                    <select id="inputState" name="procedimento" class="form-select" required>
                    <?php while($listandoProcedimento = mysqli_fetch_array($consultando)): ?>
                    <option value="<?= $listandoProcedimento['Codigo'] ?>"><?= $listandoProcedimento['NomeProcedimento'] ?></option>
                    <?php endwhile ?>
                    </select>
                    <div class="valid-feedback">
                        Certo!
                    </div>
                    <div class="invalid-feedback">
                        Algum procedimento deve ser inserido!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Data</label>
                    <input type="date" name="data_agendamento" class="form-control" id="inputPassword4" value="" required>
                    <div class="valid-feedback">
                        Certo!
                    </div>
                    <div class="invalid-feedback">
                        Insira a data do agendamento!
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="hora" class="form-label">Hora</label>
                        <select class="form-select" name="hora" id="hora" aria-label="Default select example" required>
                           
                            <option selected>Open this select menu</option>
                            <option value="1">08:00</option>
                            <option value="2">08:30</option>
                            <option value="3">09:00</option>
                            <option value="3">09:30</option>
                            <option value="3">10:00</option>
                            <option value="3">10:30</option>
                            <option value="3">11:30</option>
                            <option value="3">12:00</option>
                            <option value="3">13:30</option>
                            <option value="3">14:00</option>
                            <option value="3">14:30</option>
                            <option value="3">15:00</option>
                            <option value="3">15:30</option>
                            </select>
                            
                    <div class="valid-feedback">
                        Certo!
                    </div>
                    <div class="invalid-feedback">
                        É necessário que seja inserida a hora de realização do serviço
                    </div>
                </div>
                
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Preço</label>
                    <input type="text" name="preco" class="form-control" id="preco" >
                    
                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" id="realiza_agendamento" name="realiza_agendamento">Realizar agendamento</button>
                </div>
                
                </form>
                <div id="texto">

                </div>
               
        
</div>
<script src="../arquivos_jsCliente/MSrealizarAgendamento_cliente.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
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
     $(document).ready(function(){
          
          $('#inputState').change(function () {
                var selectedValue = $(this).val();
                /*
                console.log(selectedValue);
                alert(selectedValue);
                */
               $.ajax({
                    url: "../controladorCliente/buscandoPreco.php",
                    type: "POST",
                    data: 'idProcedimento=' + selectedValue,
                    success: function(response){
                        $("#preco").val(response);
                    }
               });
            });
     });
        
</script>
</body>

<?php require_once("../componentes/rodape.php") ?>



</html>