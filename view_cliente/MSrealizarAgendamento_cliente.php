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
        <h1>Realizar Agendamento</h1>
       <!--Form de realizar agendamento
    Servico-
Preco-
Data-
Hora-
tbProcedimento_Codigo-

tbBarbearia_Codigo-->
            <form action="..\controladorCliente\MSrealizarAgendamento.php" class="row g-3 needs-validation" method="POST" novalidate>
                <input type="hidden" name="CodigoCliente" value="<?= $_SESSION['Codigo'] ?>">
                <input type="hidden" name="CodigoBarbearia" value="<?= $_POST['CodigoBarbearia']  ?>">
                <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Barbearia</label>
                    <input type="text" name="barbearia" class="form-control" id="inputEmail4" value="<?= $mostrandoBarbearia['NomeBarbearia'] ?>" disabled>
                   
                </div>
                <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Cliente</label>
                    <input type="text" name="cliente" class="form-control" id="inputEmail4" value="<?= $_SESSION['Nome'] ?>" disabled>
                   
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Procedimento</label>
                    <select id="inputState" name="procedimento" id="procedimento" class="form-select" required>
                    <?php while($listandoProcedimento = mysqli_fetch_array($consultando)): ?>
                    <option value=""><?= $listandoProcedimento['Nome'] ?></option>
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
                    <label for="inputEmail4" class="form-label">Hora</label>
                    <input type="text" name="hora" id="hora" class="form-control" id="inputEmail4" required>
                    <div class="valid-feedback">
                        Certo!
                    </div>
                    <div class="invalid-feedback">
                        É necessário que seja inserida a hora de realização do serviço
                    </div>
                </div>
                
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Preço</label>
                    <input type="text" name="preco" class="form-control" id="inputPassword4" disabled>
                    
                </div>
                
                
                
                <div class="col-12">
                    <button type="button" class="btn btn-primary" name="confirmar_agendamento" id="confirmar_agendamento">Confirmar agendamento</button>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="realiza_agendamento">Realizar agendamento</button>
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
            /*
            $("#botao").on("click",function(){
                alert("ok")
            });
            
           //onchange
           $("#procedimento :selected").change(function(){
               console.log("deu certo")
           })
           $("#hora").change(function(){
            console.log("deu certo")
           })
           */
          var vprocedimento = $('#procedimento').val();
          var procedimento = $("#procedimento option:selected").text()
           $("#confirmar_agendamento").on("click",function(){
               $.ajax({
                   url: "../controladorCliente/buscandoPreco.php",
                   method: 'POST',
                   type: "POST",
                   dataType: "html",
                   data: "{procedimento : procedimento}",
                   success: function(response){
                       alert(procedimento);
                   }

               });
           });
     });
        
</script>
</body>

<?php require_once("../componentes/rodape.php") ?>



</html>