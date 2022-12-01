<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo_com_fundo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../cliente_arquivos_css/MScadastro_cliente.css">
    
    <title>Cadastre-se</title>
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
      <h3>Junte-se aos mestres, seja um  mestre-sala agóra mesmo!</h3>
    </p>
    <p>
    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal" id="comece">
            Começe agora
          </button>
  
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Cadastre-se</h5>
                  <button type="button" class="btn-close btn-close-white"  data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                  <!--CADASTRO DE CLIENTE-->
                  <form class="row g-5 needs-validation" method="post" action="../controladorCliente/MScadastro_cliente.php" novalidate>
                    <div class="col-md-4 position-relative">
                      <label for="validationTooltip01" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="validationTooltip01" name="nome" placeholder="Nome completo" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira seu nome
                      </div>
                    </div>

                    <div class="col-md-4 position-relative">
                      <label for="validationTooltip01" class="form-label">Nome de usuário</label>
                      <input type="text" class="form-control"  name="nomeUsuario" id="nomeUsuario" placeholder="Nome de usuário(Apelido)" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira um nome de usuário válido
                      </div>
                    </div>

                    <div class="col-md-4 position-relative">
                      <label for="validationTooltip01" class="form-label">Email</label>
                      <input type="text" class="form-control" pattern="[a-z0-9._%+-]+@[gmail0-9.-]+\.[a-z]{2,4}$" title="aceitavel @gmail, @hotmail"  name="email" id="email" placeholder="Email válido" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip" id="erroEmail">
                        Insira seu email
                      </div>
                    </div>

                    <div class="col-md-20 position-relative">
                      <label for="validationTooltip01" class="form-label">Telefone</label>
                      <input type="text" class="form-control" id="telefone"  name="telefone" placeholder="(00) 0000-0000" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira seu numero de telefone
                      </div>
                    </div>

                    <div class="col-md-20 position-relative">
                      <label for="validationTooltip02" class="form-label">Data/nascimento</label>
                      <input type="date" class="form-control"  name="dataNascimento" id="dataNascimento" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira sua data de nascimento
                      </div>
                    </div>
                    <div class="col-md-20 position-relative">
                      <label for="validationTooltipUsername" class="form-label">Endereço</label>
                      <div class="input-group has-validation">
                        
                        <input type="text" class="form-control" aria-describedby="validationTooltipUsernamePrepend" name="endereco" id="endereco" placeholder=" Rua, Numero, Bairro" required>
                        <div class="valid-tooltip">
                          Certo!
                        </div>
                        <div class="invalid-tooltip">
                          Insira seu endereço
                        </div>
                      </div>
                    </div>
                    <div class="col-md-20 position-relative">
                      <label for="validationTooltip03" class="form-label">CEP</label>
                      <input type="text" class="form-control"  name="cep" id="cep" onchange="buscandoCEP()" placeholder="00000-000" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Insira seu CEP
                      </div>
                    </div>
                      <div class="col-md-20 position-relative">
                        <label for="validationTooltip03" class="form-label">Cidade</label>
                        <input type="text" class="form-control" name="cidade" id="cidade" required>
                        <div class="valid-tooltip">
                          Certo!
                        </div>
                        <div class="invalid-tooltip">
                          Insira a cidade onde você reside
                        </div>

                    </div>
                    <div class="col-md-20 position-relative">
                      <label for="validationTooltip04" class="form-label">UF</label>
                      <select class="form-select"  name="uf" required>
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
                        Insira a UF(estado) onde você reside
                      </div>
                    </div>
                    <div class="col-md-20 position-relative" id="primeiraSenha">
                      <label for="validationTooltip03" class="form-label">Senha de acesso</label>
                      <input type="password" class="form-control" id="senha" name="" pattern=".{8,}"  placeholder="Senha com 8 ou mais caracteres" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip" id="msgErro">
                        Insira uma senha de acesso
                      </div>
                    </div>
                    <div class="col-md-20 position-relative">
                      <label for="validationTooltip03" class="form-label">Repetir senha</label>
                      <input type="password" class="form-control" id="repeteSenha" pattern=".{8,}" name="senhaDeAcesso" placeholder="Senha com 8 ou mais caracteres" required>
                      <div class="valid-tooltip">
                        Certo!
                      </div>
                      <div class="invalid-tooltip">
                        Repita sua senha de acesso
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
        
    </p>
  </div>
</div>
  <div class="body2">
  
  
  

  <div class="area_cards">
    
  
  
  <!--Cards com informações sobre as opções do usuário-->
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100" id="cards">
        <img src="../imagens/animacao1.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Defina a barbearia de sua preferencia</h5>
          <p class="card-text">Aqui na mestre-sala você pode escolher ser cliente de qualquer barbearia cadastrada, uma ou mais, levando em conta a que mais faz parte de se gosto.</p>
        </div>
        
      </div>
    </div>
    <div class="col">
      <div class="card h-100"  id="cards">
        <img src="../imagens/animacao2.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Faça sua agenda sem sair de casa</h5>
          <p class="card-text">Você pode marcar qualquer serviço no conforto de sua casa ,e também sem precisar de ligação telefonica, basta escolher a barbearia, realizar o agendamento definindo a data e hora disponivel e pronto!</p>
        </div>
        
      </div>
    </div>
    <div class="col">
      <div class="card h-100"  id="cards">
        <img src="../imagens/animacao3.svg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Cuide de sua beleza de forma fácil com a mestre-sala</h5>
          <p class="card-text">A mestre-sala está disponivel a qualquer hora, somente dependendo de ter acesso a internet, viu como é fácil ?</p>
        </div>
       
      </div>
    </div>
  </div>
  </div>
  

</div>
  
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

  </body>
  <?php require_once("../componentes/rodape.php") ?>

<script>
  
  $(document).ready(function(){
      $('#telefone').mask('(00) 00000-0000');
      $('#cep').mask('00000-000');
      
      });
  //Verificando duplicidade de Nome de usuário
  $('#nomeUsuario').change(function(){
      var apelido = $(this).val();
      
      $.ajax({
        url : "../controladorCliente/duplicidadeNomeUsuario.php",
        type : 'POST',
        data : 'apelido=' + apelido,
        success : function(response){   //MELHORAR
         //alert(response)
        
        },
        error : function(){
          alert("Erro ao verificar nome de usuário");
         

        }

      })
  })


  //Verificando duplicidade de Email
 $('#email').change(function(){
  
   var email = $(this).val();
    
   $.ajax({
     url: "../controladorCliente/duplicidadeEmail.php",
     type: 'POST',
     data: 'email=' + email,
     success : function(response){          //MELHORAR
       alert(response);
     },
     error: function(){
       alert("Erro ao verificar email");
       $("#email").val("");
       return FALSE;

     }
   })
  
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
       $("#dataNascimento").val("");
       return FALSE;
       
     }
  })
  //Verificando inputs de senhas e senhas repetidas
  $("#senha").change(function(){
      var senha = $("#senha").val();
     if(senha.length < 8){
          //alert("A senha tem que haver 8 ou mais caracteres");
          $("#msgErro").append("A senha tem que haver 8 ou mais caracteres");
          
     }else{
      return true;
     }
  })

  $("#repeteSenha").change(function(){
     var senha =  $("#senha").val();
     var repeteSenha = $("#repeteSenha").val();
    if(senha != repeteSenha){
      alert("Senhas são diferentes");
      $("#repeteSenha").val("");
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