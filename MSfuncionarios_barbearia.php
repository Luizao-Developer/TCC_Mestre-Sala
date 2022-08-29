<?php 
require_once("controladores/MSsessao_barbearia.php");
?>
<?php
    
 
    $conexao = mysqli_connect("127.0.0.1","root","","mestre_sala");

    $sql  = "select * from tbfuncionarios 
    where 1 = 1";



$result = mysqli_query($conexao,$sql);
$linha = mysqli_fetch_array($result);
$qtd = mysqli_num_rows($result);
  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagens/logo_com_fundo.png" type="image/x-icon">
    <link rel="stylesheet" href="arquivos_css/MStelaprincipal_barbearia.css">
    <title>Mestre-Sala</title>
</head>

<style>
*{
    margin: 0;
    padding: 0;

}
body{
    width:100%;
    background: darkred;
}
.card{
    border: none;
    margin-top: 50px;
    margin-left: 10px;
    box-shadow: 1px 1px 40px 10px black;
}
.espacamento{
    width: 100%;
    height: 100px;
    background-image: url(imagens/barber-1453064_1920.jpg);
}
.pg_principal{
    width: 100%;
    height: 140vh;
    background-color: darkred;
    padding-top: 30px;
}
.pg_principal h1{
    color:white;
}
ul a{
    border-bottom: solid transparent;
    margin: 10px 5px;
    padding: 1em;
    padding-left: 100px;
    padding: 0 50px;
    text-align: center;
}
ul a:hover{
    border-bottom: solid darkred;
    color: white;
    transition: all .5s;
}
#contaBotao{
    background: darkred;
    border: none;
    border-radius: 5px;
    font-size: larger;

}
#recebeUsuario{
    color: white;
}
.card p{
    color: gray;
}
#fotoUsuarioSistema{
    border: solid 1px black;
    padding: 70px 70px;
    margin-left: 35%;
    border-radius: 50%;
}
footer .nav{
    background: black;
    padding: 20px;
    color: white;
}
.nav li img{
    border-radius: 50%;
}
#contaBotao{
    background: darkred;
    border: none;
    border-radius: 5px;
    font-size: larger;

}
#tabela #opcoes{
    color: black;
    background:white;
    border:none;
}
#tabela table{
    border-radius: 20px;
}
#comece{
    
    background: darkred;
    color: white;
    padding: 10px 30px;
    border: none;
    font-size: larger;
    border-radius: 10px;
}
#comece:hover{
    
    background: red;
    
}
.modal-body{
    background: black;
    display: flex;
}
.modal-body label{
    color: white;
}
.modal-header{
    background: black;
    color: white;
}

.modal-header button{
    color: white;
}
.modal-body input{
    border: none;
    border-radius: 0;
    background: transparent;
    border-bottom: solid 2px orange;
    color: white;
}
.modal-body label{
    color: white;
}
.modal-body #cadastrar{
    margin-top: 15px;
    margin-left: 50px;
    background: darkred;
    color: white;
    padding: 10px 150px;
    border: none;
    font-size: larger;
    border-radius: 0;
}
.modal-body #cadastrar:hover{
    background: rgb(187, 3, 3);
}

</style>
<body>

    <!--Menu do barbeiro--->
    
    <?php require_once("componentes/menuBarbearia.php"); ?>


<!--Continuação do site-->
<div class="espacamento">
<h1 style="color:white;"><?= $_SESSION['NomeBarbearia'] ?></h1>
</div>
<div class="pg_principal container">

    <h1>Funcionários da barbearia: </h1>
    <!--Tabela de funcionarios-->
     <div id="tabela">
                <!--Cadastro de funcionários-->
                <div class="alert alert-success" role="alert" id="opcoes">
                    <h4 class="alert-heading">Faça aqui o cadastro de novos funcionários</h4>
                    
                    <hr>
                    <p class="mb-0">O botão abaixo acessa o forms de cadastro.</p>
                    

                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModa2" id="comece">
                    <i class="fas fa-edit"></i>
                  </button>
                
          <!-- Modal -->
          <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Cadastre seu funcionário</h5>
                  <button type="button" class="btn-close btn-close-white"  data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                
                
                <div class="modal-body">
                  <!--CADASTRO DE BARBEARIA-->
                  <form class="row g-3 needs-validation" name="cadFuncionario_barbearia" method="post" action="controladores/MScadFuncionário_barbearia.php"  novalidate >
                      
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
                      <label for="status" class="form-label">Barbearia</label>
                      <select class="form-select" id="barbearia" name="barbearia" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="1">1</option>
                      </select>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Selecione o status de seu funcionário
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
                <table class="table table-dark table-hover">
            <thead>
                <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Data/nasçimento</th>
                <th scope="col">Cidade</th>
                <th scope="col">CEP</th>
                <th scope="col">UF</th>
                <th scope="col">Email</th>
                <th scope="col">PIS-PASEP</th>
                <th scope="col">Data de contratação</th>
                <th scope="col">Data de demissão</th>
                <th scope="col">Status</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
                </tr>
            </thead>
           
            <tbody>
            <?php
            while($linha =mysqli_fetch_array($result)) {  ?>
                <tr>
                <th scope="row"><?= $linha['Codigo'] ?></th>
                <td><?= $linha['Nome'] ?></td>
                <td><?= $linha['Endereco'] ?></td>
                <td><?= $linha['Data_nascimento'] ?></td>
                <td><?= $linha['Cidade'] ?></td>
                <td><?= $linha['CEP'] ?></td>
                <td><?= $linha['UF']  ?></td>
                <td><?= $linha['Email']  ?></td>
                <td><?= $linha['PIS_PASEP'] ?></td>
                <td><?= $linha['Data_contratacao']  ?></td>
                <td><?= $linha['Data_demissao']  ?></td>
                <td><?= $linha['Status'] ?></td>
                <!--Alteração e Exclusão de dados-->
                <td><button type="button" class="btn btn-primary"><i class="fas fa-pen"></i></button></td>
                <td><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
                </tr>
                
                <?php } ?>   
            </tbody>
            
            </table>
     </div>
</div>
    

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
<?php require_once("componentes/rodape.php") ?>

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