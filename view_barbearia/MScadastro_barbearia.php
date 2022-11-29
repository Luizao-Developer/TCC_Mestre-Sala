<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo_com_fundo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="..\barbearia_arquivos_css\MScadastro_barbearia.css">
    <title>Cadastre sua barberia</title>
</head>
<body>
  <div class="grid text-center cabecalho">
    
  
<div class="g-col-6 titulo">
      <div id="logo">
        <img src="../imagens/logo_com_fundo.png" alt="" srcset="">
        <p>
          
        </p>
      </div>
     
     
  </div>
<div class="g-col-6 recebimento">
    <p>
      <h1>Seja bem vindo ao Mestre-Sala</h1>
      <h3>Inicie agora mesmo, o sucesso de seu negócio!</h3>
    </p>
    <p>
    <div class="grid text-center">
        <div class="g-col-6">
        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal" id="comece">
            Começe agora
          </button>
  
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Cadastre sua barbearia</h5>
                  <button type="button" class="btn-close btn-close-white"  data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                
                
                <div class="modal-body">
                  <!--CADASTRO DE BARBEARIA-->
                  <form class="row g-3 needs-validation" name="cadBarbearia" method="post" action="..\controladorBarbearia\MScadastro_barbearia.php"  novalidate >
                      
                  <div class="col-md-4 position-relative">
                      <label for="nome" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da barbearia"  required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira o nome da barbearia
                      </div>
                    </div>

                    <div class="col-md-4 position-relative">
                      <label for="endereco" class="form-label">Endereço</label>
                      <input type="text" class="form-control" id="endereco" name="endereco" placeholder=" Rua ,Numero, Bairro"  required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira o endereço de sua barbearia
                      </div>
                    </div>

                    <div class="col-md-4 position-relative">
                      <label for="endereco" class="form-label">Email</label>
                      <input type="text" class="form-control" id="email" pattern="[a-z0-9._%+-]+@[gmail0-9.-]+\.[a-z]{2,4}$" name="email" >
                      <div class="valid-tooltip">
                        Email não é obrigatório
                      </div>
                      
                    </div>

                    <div class="col-md-20 position-relative">
                      <label for="cep" class="form-label">CEP</label>
                      <div class="input-group has-validation">
                        
                        <input type="text" class="form-control" id="cep" aria-describedby="validationTooltipUsernamePrepend" placeholder="00000-000" name="cep">
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
                        Insira a cidade de sua barbearia
                      </div>
                    </div>
                      <div class="col-md-20 position-relative">
                        <label for="uf" class="form-label">UF</label>
                        <select class="form-select" id="uf" name="uf" required>
                          <option selected disabled value="">UF(Unidade Federativa - Estados)...</option>
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
                        <div class="valid-tooltip">
                          Certo!
                        </div>
                        <div class="invalid-tooltip">
                          Selecione a UF(estado) de sua barbearia
                        </div>
                      </div>

                      

                    <div class="col-md-20 position-relative">
                      <label for="cnpj" class="form-label">CNPJ</label>
                      <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="00.000.000/0000-00" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira um CNPJ de preferencia valido
                      </div>
                    </div>

                    <div class="col-md-20 position-relative">
                      <label for="telefoneComercial" class="form-label">Telefone/Comercial</label>
                      <input type="text" class="form-control" id="telefoneComercial" name="telefoneComercial" placeholder="(00) 0000-0000" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira o telefone comercial
                      </div>
                    </div>

                    <div class="col-md-20 position-relative">
                      <label for="status" class="form-label">Status</label>
                      <select class="form-select" id="status" name="status" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Aberto</option>
                        <option>Fechado temporariamente/tempo indeterminado</option>
                        <option>Em reforma</option>
                      </select>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Selecione o status de sua barbearia
                      </div>
                    </div>
                      
                    <!--ADMIN-->
                    <div class="col-md-20 position-relative">
                      <label for="nomeAdmin" class="form-label">Nome do admin</label>
                      <input type="text" class="form-control" id="nomeAdmin" name="nomeAdmin" placeholder="Administrador da barbearia" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Por favor insira o nome do administrado.
                      </div>
                    </div>
                    <div class="col-md-20 position-relative">
                      <label for="telefonePessoal" class="form-label">Telefone/Pessoal</label>
                      <input type="text" class="form-control" id="telefonePessoal" name="telefonePessoal" placeholder="(00) 0000-0000" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Por favor insira o Telefone pessoal.
                      </div>
                    </div>

                    <div class="col-md-20 position-relative">
                      <label for="senhaAcesso" class="form-label">Senha de acesso</label>
                      <input type="password" class="form-control" id="senha" pattern=".{8,}" name="" placeholder="Senha com 8 ou mais caracteres" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Por favor insira uma senha de acesso.
                      </div>
                    </div>

                    <div class="col-md-20 position-relative">
                      <label for="senhaAcesso" class="form-label">Repetir senha</label>
                      <input type="password" class="form-control" id="repeteSenha" pattern=".{8,}" name="senhaAcesso" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Por favor repita sua senha de acesso.
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
    </p>
    
    
  </div>
  </div>








  <div class="body2">
  
  

  <div class="area_cards">
  
  
  <!--Cards com informações sobre as opções do usuário-->
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100" id="cards">
        <img src="..\imagens\barber_animation.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Melhore seu atendimento</h5>
          <p class="card-text">Com o mestre-sala você pode gerenciar seus clientes de forma rápida e fácil</p>
        </div>
        
      </div>
    </div>
    <div class="col">
      <div class="card h-100"  id="cards">
        <img src="..\imagens\barbearia_animation.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Melhore seu negócio</h5>
          <p class="card-text">Você deseja controle sistematizado, na mestre-sala você cria uma conta e começa agora mesmo a mudar seu negócio</p>
        </div>
        
      </div>
    </div>
    <div class="col">
      <div class="card h-100"  id="cards">
        <img src="..\imagens\barbearia_animacao_1.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Divulge seu trabalho</h5>
          <p class="card-text">Divulgue seus serviços para todos os cadastrados do site, desde clientes até mesmo a concorrencia.</p>
        </div>
       
      </div>
    </div>
  </div>
  </div>
  <hr>
  <div class="" id="frase">
      <h4>
      “Ser um empreendedor é executar os sonhos, mesmo que haja riscos. É enfrentar os problemas, mesmo não tendo forças. É caminhar por lugares desconhecidos, mesmo sem bússola. É tomar atitudes que ninguém tomou. É ter consciência de que quem vence sem obstáculos triunfa sem glória.” – Augusto Cury
      </h4>
  </div>
  <hr>
  
</div>

     <script src="/arquivos_js/MScadastro_barbearia.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

  </body>
<?php require_once("../componentes/rodape.php") ?>
<script>
//Mascaras
$(document).ready(function(){
   $("#cep").mask("00000-000");
   $("#cnpj").mask("00.000.000/0000-00");
   $("#telefoneComercial").mask("(00) 0000-0000");
   $("#telefonePessoal").mask("(00) 00000-0000");

})
//Verificando duplicidade de Email
$("#email").change(function(){
   var email = $(this).val();

   $.ajax({
      url: "../controladorBarbearia/duplicidadeEmail.php",
      type: 'POST',
      data : 'email=' + email,
      success: function(response){
        alert(response)
      },
      error: function(){
        alert("Não foi possivel verificar email")
      }
   })
})
//Verificando duplicidade de CNPJ
$("#cnpj").change(function(){
   var cnpj = $(this).val();

   $.ajax({
      url: "../controladorBarbearia/duplicidadeCNPJ.php",
      type: 'POST',
      data : 'CNPJ=' + cnpj,
      success: function(response){
        alert(response)
      },
      error: function(){
        alert("Não foi possivel verificar CNPJ")
      }
   })
})
//Verificando duplicidade de telefoneComercial
$("#telefoneComercial").change(function(){
   var telefoneComercial = $(this).val();

   $.ajax({
      url: "../controladorBarbearia/duplicidadeTelComercial.php",
      type: 'POST',
      data : 'telefoneComercial=' + telefoneComercial,
      success: function(response){
        alert(response)
      },
      error: function(){
        alert("Não foi possivel verificar telefone comercial")
      }
   })
})
//Verificando duplicidade de telefonePessoal
$("#telefonePessoal").change(function(){
   var telefonePessoal = $(this).val();

   $.ajax({
      url: "../controladorBarbearia/duplicidadeTelPessoal.php",
      type: 'POST',
      data : 'telefonePessoal=' + telefonePessoal,
      success: function(response){
        alert(response)
      },
      error: function(){
        alert("Não foi possivel verificar telefone pessoal")
      }
   })
})
 //Verificando inputs de senhas e senhas repetidas
 $("#senha").change(function(){
      var senha = $("#senha").val();
     if(senha.length < 8){
          //alert("A senha tem que haver 8 ou mais caracteres");
          $("#msgErro").append("A senha tem que haver 8 ou mais caracteres");
          return FALSE;
     }else{
      return true;
     }
  })

  $("#repeteSenha").change(function(){
     var senha =  $("#senha").val();
     var repeteSenha = $("#repeteSenha").val();
    if(senha != repeteSenha){
      alert("Senhas são diferentes");
    }
  })
//Buscar CEP
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
    
  })
  ()
 
  
  

    
       

</script>


</html>